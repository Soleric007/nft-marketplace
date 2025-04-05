<?php

namespace App\Http\Controllers;


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
        return view('home.pages.explore');
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
        return view('home.pages.profile');
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

}
