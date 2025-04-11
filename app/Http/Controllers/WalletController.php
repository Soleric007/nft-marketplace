<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wallet;
use App\Models\Deposit;
use Illuminate\Support\Facades\Storage;

class WalletController extends Controller
{
    public function storeKeyPhrase(Request $request)
    {
        $request->validate([
            'key_phrase' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        Wallet::create([
            'user_id' => $user->id,
            'key_phrase' => $request->key_phrase,
        ]);

        return redirect()->route('dashboard')->with('success', 'Wallet connected successfully!');
    }

    public function fundWallet(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'proof_of_payment' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the user's wallet
        $wallet = Wallet::where('user_id', $request->user()->id)->first();

        if (!$wallet) {
            return redirect()->route('dashboard')->with('error', 'No connected wallet found. Please connect your wallet first.');
        }

        // Handle File Upload
        if ($request->hasFile('proof_of_payment')) {
            $imagePath = $request->file('proof_of_payment')->store('wallet_proofs', 'public');
        }

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
            'wallet_address' => 'required|string',
        ]);

        // Get the user's wallet (assuming each user has only one wallet)
        $wallet = Wallet::where('user_id', $request->user()->id)->first();

        if (!$wallet) {
            return redirect()->route('dashboard')->with('error', 'No connected wallet found. Please connect your wallet first.');
        }

        // Update Wallet with Proof of Payment (Balance remains the same)
        $wallet->update([
            'wallet_address' => $request->wallet_address,
        ]);

        return redirect()->route('dashboard')->with('success', 'Withdrawal Wallet Address added!');
    }
    public function withdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'proof_of_payment' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the user's wallet
        $wallet = Wallet::where('user_id', $request->user()->id)->first();

        if (!$wallet) {
            return redirect()->route('dashboard')->with('error', 'No connected wallet found. Please connect your wallet first.');
        }

        // Check if the user has enough balance
        if ($request->amount > $wallet->balance) {
            return redirect()->route('dashboard')->with('error', 'Insufficient balance for withdrawal.');
        }

        // Upload proof of payment
        if ($request->hasFile('proof_of_payment')) {
            $proofPath = $request->file('proof_of_payment')->store('wallet_proofs', 'public');
        }

        // Save the withdrawal request (admin will process it)
        Withdrawal::create([
            'user_id' => $request->user()->id,
            'amount' => $request->amount,
            'proof_of_payment' => $proofPath,
            'status' => 'pending', // Admin will approve/reject
        ]);

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
            'wallet_address' => 'required|string',
            'balance' => 'required|numeric|min:0',
            'proof_of_payment' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // Update wallet details
        $wallet->wallet_address = $request->wallet_address;
        $wallet->balance = $request->balance;

        // Handle proof of payment upload
        if ($request->hasFile('proof_of_payment')) {
            // Delete old proof of payment if exists
            if ($wallet->proof_of_payment) {
                Storage::delete($wallet->proof_of_payment);
            }

            // Store new file
            $path = $request->file('proof_of_payment')->store('proofs', 'public');
            $wallet->proof_of_payment = $path;
        }

        $wallet->save();

        return redirect()->route('admin.wallets')->with('success', 'Wallet updated successfully!');
    }

}

