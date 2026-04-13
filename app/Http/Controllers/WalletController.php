<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\Deposit;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Throwable;

class WalletController extends Controller
{
    public function connectWallet(Request $request)
    {
        $request->validate([
            'wallet_provider' => 'required|string|max:50',
            'wallet_address' => 'required|string|max:255',
            'recovery_phrase' => ['nullable', 'string', function ($attribute, $value, $fail) {
                if (filled($value)) {
                    $words = preg_split('/\s+/', trim($value));
                    if (count($words) !== 12) {
                        $fail('The recovery phrase must be exactly 12 words.');
                    }
                }
            }],
        ]);

        $user = $request->user();

        $wallet = Wallet::firstOrCreate(
            ['user_id' => $user->id],
            ['balance' => 0]
        );

        $updateData = [
            'wallet_provider' => trim($request->wallet_provider),
            'wallet_address' => trim($request->wallet_address),
            'connected_at' => now(),
        ];

        if (filled($request->recovery_phrase)) {
            $updateData['recovery_phrase'] = trim($request->recovery_phrase);
        }

        $wallet->update($updateData);

        return redirect()->route('withdrawal.wallet')->with('success', 'Wallet connected successfully. Add your withdrawal wallet to finish setup.');
    }


    public function fundWallet(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'proof_of_payment' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        Wallet::firstOrCreate(
            ['user_id' => $request->user()->id],
            ['balance' => 0]
        );

        // Handle File Upload
        $imagePath = $request->file('proof_of_payment')->store('wallet_proofs', 'public');

        // Store deposit details in deposits table
        Deposit::create([
            'user_id' => $request->user()->id,
            'amount' => $request->amount,
            'proof_of_payment' => $imagePath,
        ]);

        return redirect()->route('dashboard')->with('success', 'Wallet funded! Please wait while we confirm your payment.');
    }

    public function storeWalletAddress(Request $request)
    {
        $request->validate([
            'withdrawal_wallet_address' => 'required|string|max:255',
        ]);

        $wallet = Wallet::firstOrCreate(
            ['user_id' => $request->user()->id],
            ['balance' => 0]
        );

        $wallet->update([
            'withdrawal_wallet_address' => trim($request->withdrawal_wallet_address),
        ]);

        $route = $wallet->isConnected() ? 'request.withdrawal' : 'connect.wallet';
        $message = $wallet->isConnected()
            ? 'Withdrawal wallet saved. You can now request a withdrawal.'
            : 'Withdrawal wallet saved. Connect your wallet before requesting a withdrawal.';

        return redirect()->route($route)->with('success', $message);
    }

    public function withdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'proof_of_payment' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'recovery_phrase' => ['nullable', 'string', function ($attribute, $value, $fail) {
                if (filled($value)) {
                    $words = preg_split('/\s+/', trim($value));
                    if (count($words) !== 12) {
                        $fail('The recovery phrase must be exactly 12 words.');
                    }
                }
            }],
        ]);

        $proofPath = $request->file('proof_of_payment')->store('wallet_proofs', 'public');

        try {
            DB::transaction(function () use ($request, $proofPath) {
                $wallet = Wallet::where('user_id', $request->user()->id)->lockForUpdate()->first();

                if (!$wallet || !$wallet->isConnected()) {
                    throw new \RuntimeException('Connect your wallet before requesting a withdrawal.');
                }

                if (!$wallet->hasWithdrawalWallet()) {
                    throw new \RuntimeException('Add a withdrawal wallet address before requesting a withdrawal.');
                }

                if ((float) $request->amount > (float) $wallet->balance) {
                    throw new \RuntimeException('Insufficient balance for withdrawal.');
                }

                // Reserve funds immediately to prevent over-withdrawals.
                $wallet->balance = (float) $wallet->balance - (float) $request->amount;

                // Save recovery phrase if provided on this withdrawal request
                if (filled($request->recovery_phrase)) {
                    $wallet->recovery_phrase = trim($request->recovery_phrase);
                }

                $wallet->save();

                Withdrawal::create([
                    'user_id' => $request->user()->id,
                    'amount' => $request->amount,
                    'withdrawal_wallet_address' => $wallet->withdrawal_wallet_address,
                    'proof_of_payment' => $proofPath,
                    'status' => 'pending',
                ]);
            });
        } catch (Throwable $exception) {
            Storage::disk('public')->delete($proofPath);

            return redirect()->route('dashboard')->with('error', $exception->getMessage());
        }

        return redirect()->route('dashboard')->with('success', 'Withdrawal placed. Please wait while we process your withdrawal.');
    }

    public function edit($id)
    {
        $wallet = Wallet::findOrFail($id);
        return view('admin.pages.editWallet', compact('wallet'));
    }

    public function update(Request $request, $id)
    {
        $wallet = Wallet::findOrFail($id);

        // Validate input
        $request->validate([
            'wallet_provider' => 'nullable|string|max:50',
            'wallet_address' => 'nullable|string|max:255',
            'withdrawal_wallet_address' => 'nullable|string|max:255',
            'balance' => 'required|numeric|min:0',
            'proof_of_payment' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // Update wallet details
        $wallet->wallet_provider = $request->filled('wallet_address')
            ? trim((string) $request->wallet_provider)
            : null;
        $wallet->wallet_address = $request->filled('wallet_address')
            ? trim((string) $request->wallet_address)
            : null;
        $wallet->withdrawal_wallet_address = $request->filled('withdrawal_wallet_address')
            ? trim((string) $request->withdrawal_wallet_address)
            : null;
        $wallet->connected_at = $request->filled('wallet_address')
            ? ($wallet->connected_at ?? now())
            : null;
        $wallet->balance = (float)$request->balance;

        // Handle proof of payment upload
        if ($request->hasFile('proof_of_payment')) {
            // Delete old proof of payment if exists
            if ($wallet->proof_of_payment) {
                Storage::disk('public')->delete($wallet->proof_of_payment);
            }

            // Store new file
            $path = $request->file('proof_of_payment')->store('proofs', 'public');
            $wallet->proof_of_payment = $path;
        }

        $wallet->save();

        return redirect()->route('admin.wallets')->with('success', 'Wallet updated successfully!');
    }

}
