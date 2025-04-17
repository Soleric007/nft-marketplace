<?php

namespace App\Http\Controllers;

use App\Models\MintedNFT;
use App\Models\NFT;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.pages.index');
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
    public function showExplore()
    {
        $mintedNfts = Nft::where('status', 'minted')->latest()->get();
        return view('home.pages.explore', compact('mintedNfts'));
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
