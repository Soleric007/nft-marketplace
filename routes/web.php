<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/profile', [HomeController::class, 'showProfile'])->name('profile');
    Route::get('/create', [HomeController::class, 'showCreate'])->name('create');
    Route::get('/wallet', [HomeController::class, 'showWallet'])->name('wallet');
});
Route::get('/dashboard', function () {
    return view('home.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth', 'verified', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';
