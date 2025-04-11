<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\NFT;
use App\Models\Wallet;
use App\Models\Deposit;
use App\Models\Withdrawal;
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
    Route::get('/nfts/mint/{id}', [NFTController::class, 'showMintDetails'])->name('nfts.mint.details');
    Route::get('/nfts/mint/{id}/payment', [NFTController::class, 'showPaymentForm'])->name('nfts.mint.payment');
    Route::post('/nfts/mint/{id}/process', [NFTController::class, 'processPayment'])->name('nfts.mint.process');
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
    if (!$wallet) {
        return redirect()->route('dashboard')->with('error', 'Wallet not found. Please contact support.');
    }

    return view('home.pages.dashboard', compact(
        'user',
        'nfts',
        'wallet',
    ));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/nfts', [AdminController::class, 'nfts'])->name('admin.nfts');
    Route::post('/admin/nfts/mint/{id}', [NFTController::class, 'mintNFT'])->name('admin.nfts.mint');
    Route::get('/admin/wallets', [AdminController::class, 'wallets'])->name('admin.wallets');
    Route::get('/admin/wallets/{id}/edit', [WalletController::class, 'edit'])->name('admin.wallets.edit');
    Route::put('/admin/wallets/{id}', [WalletController::class, 'update'])->name('admin.wallets.update');
    Route::get('/admin/deposits', [AdminController::class, 'deposits'])->name('admin.deposits');
    Route::get('/admin/withdrawals', [AdminController::class, 'withdrawals'])->name('admin.withdrawals');
    Route::post('/admin/withdrawals/{withdrawal}/confirm', [AdminController::class, 'confirmWithdrawal'])->name('admin.withdrawals.confirm');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/edituser/{user}', [AdminController::class, 'showEditUser'])->name('admin.showEditUser');
    Route::post('/admin/users/update/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::get('/admin/deleteuser/{user}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
});

require __DIR__ . '/auth.php';
