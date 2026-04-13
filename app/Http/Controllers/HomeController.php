<?php

namespace App\Http\Controllers;

use App\Models\NFT;
use App\Models\ArtNft;
use App\Models\Wallet;
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
        return view('home.pages.placeholder', [
            'pageTitle' => 'Activity',
            'heading' => 'Activity feed is coming soon',
            'description' => 'We have not wired this section up yet, but the marketplace and wallet flows are ready to use.',
        ]);
    }
    public function showAuthor()
    {
        return view('home.pages.placeholder', [
            'pageTitle' => 'Authors',
            'heading' => 'Creator profiles are on the roadmap',
            'description' => 'For now, you can still browse featured NFTs, collections, and wallet actions without hitting a broken page.',
        ]);
    }
    public function showCollection()
    {
        return view('home.pages.placeholder', [
            'pageTitle' => 'Collections',
            'heading' => 'Collection pages are not published yet',
            'description' => 'This link now lands on a safe fallback instead of throwing a view error while the dedicated collection experience is being built.',
        ]);
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
        return view('home.pages.wallet', [
            'wallet' => $this->walletForCurrentUser(),
        ]);
    }

    public function connectWallet(Request $request)
    {
        return view('home.pages.connect', [
            'wallet' => $this->walletForCurrentUser(),
            'selectedProvider' => $request->query('provider'),
        ]);
    }

    public function showFundWallet()
    {
        return view('home.pages.fund');
    }

    public function showWithdrawalWallet()
    {
        return view('home.pages.withdrawalWallet', [
            'wallet' => $this->walletForCurrentUser(),
        ]);
    }

    public function showRequestWithdrawal()
    {
        return view('home.pages.requestWithdrawal', [
            'wallet' => $this->walletForCurrentUser(),
        ]);
    }

    protected function walletForCurrentUser(): Wallet
    {
        return Wallet::firstOrCreate(
            ['user_id' => Auth::id()],
            ['balance' => 0]
        );
    }

}
