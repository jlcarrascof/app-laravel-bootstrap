<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'home')->name('home'); // Privacy Policy Page, Terms of Service Page, etc.


/*$portfolio = [
    ['title' => 'Project #1'],
    ['title' => 'Project #2'],
    ['title' => 'Project #3'],
    ['title' => 'Project #4'],
];*/

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
