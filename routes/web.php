<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/activity', [HomeController::class, 'showActivity'])->name('activity');
Route::get('/author', [HomeController::class, 'showAuthor'])->name('author');
Route::get('/collection', [HomeController::class, 'showCollection'])->name('collection');
Route::get('/contact', [HomeController::class, 'showContact'])->name('contact');
Route::get('/create', [HomeController::class, 'showCreate'])->name('create');
Route::get('/explore', [HomeController::class, 'showExplore'])->name('explore');
Route::get('/help-center', [HomeController::class, 'showHelp'])->name('help-center');
Route::get('/item-details', [HomeController::class, 'showItemDetails'])->name('item-details');
Route::get('/login', [HomeController::class, 'showLogin'])->name('login');
Route::get('/profile', [HomeController::class, 'showProfile'])->name('profile');
Route::get('/rankings', [HomeController::class, 'showRankings'])->name('rankings');
Route::get('/register', [HomeController::class, 'showRegister'])->name('register');
Route::get('/wallet', [HomeController::class, 'showWallet'])->name('wallet');


require __DIR__.'/auth.php';
