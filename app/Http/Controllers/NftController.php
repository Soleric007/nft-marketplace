<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NFT;
use Illuminate\Support\Facades\Auth;

class NFTController extends Controller
{
    public function index(Request $request)
    {
        $query = Nft::query();

        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;

            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('collection_name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description', 'like', '%' . $searchTerm . '%');
            });
        }

        $nfts = $query->latest()->paginate(12);
        $mintedNfts = Nft::where('status', 'minted')->latest()->get();


        return view('home.pages.searchresults', compact('nfts', 'mintedNfts'));
    }

    public function show($id)
    {
        $nft = NFT::findOrFail($id);
        return view('home.pages.nftdetails', compact('nft'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'file' => 'required|file|mimes:jpg,jpeg,png,gif,webp,mp4|max:204800', // 200MB max
            'file_type' => 'required|string',
            'collection_name' => 'required|string',
            'royalties' => 'nullable|integer|min:0|max:70',
        ]);

        // File Upload Handling
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('nfts', 'public');
        } else {
            return back()->with('error', 'File upload failed');
        }

        // Store NFT in database
        NFT::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'file_path' => $filePath,
            'file_type' => $request->file_type,
            'collection_name' => $request->collection_name,
            'royalties' => $request->royalties ?? 0,
        ]);
        return redirect()->route('dashboard')->with('success', 'NFT Created Successfully');
    }
    public function mintNFT($id)
    {
        $nft = NFT::findOrFail($id);

        // if ($nft->status == 'minted') {
        //     return response()->json(['success' => false, 'message' => 'Already minted!']);
        // }
        // if ($nft->status == 'pending') {
        //     return response()->json(['success' => false, 'message' => 'NFT minting pending!']);
        // }

        $nft->update(['status' => 'minted']);

        return redirect()->back()->with('success', 'NFT successfully minted!');
    }
    // Show Mint Details Page
    public function showMintDetails($id)
    {
        $nft = NFT::findOrFail($id);

        return view('home.pages.mint-details', compact('nft'));
    }

    // Show Payment Form
    public function showPaymentForm($id)
    {
        $nft = NFT::findOrFail($id);

        if ($nft->status === 'minted') {
            return redirect()->route('dashboard')->with('error', 'NFT is already minted.');
        }

        return view('home.pages.payment-form', compact('nft'));
    }

    // Process Payment
    public function processPayment(Request $request, $id)
    {
        $request->validate([
            'proof_of_payment' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $nft = NFT::findOrFail($id);

        if ($nft->status === 'minted') {
            return redirect()->route('dashboard')->with('error', 'NFT is already minted.');
        }

        // Store the proof of payment
        $proofPath = $request->file('proof_of_payment')->store('mint-payments', 'public');

        // Update NFT status
        $nft->update([
            'status' => 'pending',
            'mint_proof_of_payment' => $proofPath,
        ]);

        return redirect()->route('dashboard')->with('success', 'NFT Minting in Progress!');
    }
}
