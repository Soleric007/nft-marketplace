<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Models\Wallet;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NFTController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WalletController;


Route::post('/nfts', [NFTController::class, 'store'])->name('nfts.store')->middleware('auth');


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/activity', [HomeController::class, 'showActivity'])->name('activity');
Route::get('/author', [HomeController::class, 'showAuthor'])->name('author');
Route::get('/collection', [HomeController::class, 'showCollection'])->name('collection');
Route::get('/contact', [HomeController::class, 'showContact'])->name('contact');
Route::get('/explore', [HomeController::class, 'showExplore'])->name('explore');
Route::get('/help-center', [HomeController::class, 'showHelp'])->name('help-center');
Route::get('/item-details', [HomeController::class, 'showItemDetails'])->name('item-details');
Route::get('/login', [HomeController::class, 'showLogin'])->name('login');
Route::get('/rankings', [HomeController::class, 'showRankings'])->name('rankings');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [HomeController::class, 'showProfile'])->name('profile');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::get('/create', [HomeController::class, 'showCreate'])->name('create');
    Route::get('/wallet', [HomeController::class, 'showWallet'])->name('wallet');
    Route::get('/fund-wallet', [HomeController::class, 'showFundWallet'])->name('wallet.fund');
    Route::post('/fund-wallet/store', [WalletController::class, 'fundWallet'])->name('wallet.fund.store');
    Route::get('/connect/wallet', [HomeController::class, 'connectWallet'])->name('connect.wallet');
    Route::post('/wallet/store', [WalletController::class, 'storeKeyPhrase'])->name('wallet.store');
    Route::get('/withdrawal-wallet', [HomeController::class, 'showWithdrawalWallet'])->name('withdrawal.wallet');
    Route::post('/withdrawal-wallet/store', [WalletController::class, 'storeWalletAddress'])->name('wallet.address.store');
    Route::get('/request-withdrawal', [HomeController::class, 'showRequestWithdrawal'])->name('request.withdrawal');
    Route::post('/withdraw', [WalletController::class, 'withdraw'])->name('withdraw');

});
Route::get('/dashboard', function () {
    $user = Auth::user();  // Get the currently authenticated user
    $nfts = $user->nfts;   // Get the NFTs associated with the user
    
    // Get User's Wallet Information
    $wallet = Wallet::where('user_id', $user->id)->first();
    return view('home.pages.dashboard', compact('user', 'nfts', 'wallet'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

require __DIR__ . '/auth.php';
