<?php

namespace App\Http\Controllers;

use App\Models\ArtNft;
use App\Models\NftPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtNFTController extends Controller
{
    public function show($id)
    {
        $nft = ArtNft::findOrFail($id);
        return view('home.pages.showArtNft', compact('nft'));
    }
    public function buy($id)
    {
        $nft = ArtNft::findOrFail($id);
        return view('home.pages.buy', compact('nft'));
    }
    public function purchaseProcess($id, Request $request ) {
        $request->validate([
            'proof_of_payment' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $nft = ArtNft::findOrFail($id);

        $proofPath = $request->file('proof_of_payment')->store('proofs', 'public');

        NftPurchase::create([
            'nft_id' => $nft->id,
            'user_id' => Auth::id(),
            'payment_method' => $request->input('payment_method', 'crypto'),
            'proof_of_payment' => $proofPath,
        ]);

        return redirect()->route('dashboard')->with('success', 'Your payment has been submitted successfully!');
    }

    public function viewPurchases(){
        $purchases = NFTPurchase::latest()->paginate(10);
        return view('admin.pages.purchases', compact('purchases'));
    }

}
