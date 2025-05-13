<?php

namespace App\Http\Controllers;

use App\Models\MintedNFT;
use App\Models\NFT;
use App\Models\ArtNft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Example: fetch NFTs marked as trending
        $trendingNfts = ArtNft::where('category', 'trending')->latest()->get();

        return view('home.pages.index', compact('trendingNfts'));
    }
    public function showActivity()
    {
        return view('home.pages.activity');
    }
    public function showAuthor()
    {
        return view('home.pages.author');
    }
    public function showCollection()
    {
        return view('home.pages.collection');
    }
    public function showContact()
    {
        return view('home.pages.contact');
    }
    public function showCreate()
    {
        return view('home.pages.create');
    }
    public function showExplore(Request $request)
    {
        $query = ArtNft::query();

        // Filter by category if selected
        if ($request->filled('category') && $request->category !== 'explore') {
            $query->where('category', $request->category);
        }

        // Search by name/title
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $exploreNfts = $query->latest()->paginate(8)->withQueryString(); // preserve query params in links

        $mintedNfts = Nft::where('status', 'minted')->latest()->get();

        return view('home.pages.explore', compact('mintedNfts', 'exploreNfts'));
    }
    public function showHelp()
    {
        return view('home.pages.help-center');
    }
    public function showItemDetails()
    {
        return view('home.pages.item-details');
    }
    public function showLogin()
    {
        return view('home.pages.login');
    }
    public function showProfile()
    {
        $user = Auth::user();
        return view('home.pages.profile', compact('user'));
    }
    public function showRankings()
    {
        return view('home.pages.rankings');
    }
    public function showRegister()
    {
        return view('home.pages.register');
    }
    public function showWallet()
    {
        return view('home.pages.wallet');
    }
    public function connectWallet()
    {
        return view('home.pages.connect');
    }
    public function showFundWallet()
    {
        return view('home.pages.fund');
    }
    public function showWithdrawalWallet()
    {
        return view('home.pages.withdrawalWallet');
    }
    public function showRequestWithdrawal()
    {
        return view('home.pages.requestWithdrawal');
    }

}
