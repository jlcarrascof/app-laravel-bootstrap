<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Route::view('/', 'home')->name('home'); // Privacy Policy Page, Terms of Service Page, etc.

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
// Route::get('/portfolio', PortfolioController::class)->name('portfolio');
Route::resource('/portfolio', PortfolioController::class);
Route::view('/contact', 'contact')->name('contact');

Route::post('contact', 'MessagesController@store');
