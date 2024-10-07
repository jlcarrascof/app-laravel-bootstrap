<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'home')->name('home'); // Privacy Policy Page, Terms of Service Page, etc.

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'PortfolioController');
