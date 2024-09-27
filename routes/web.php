<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/', 'home')->name('home'); // Privacy Policy Page, Terms of Service Page, etc.

$portfolio = [
    ['title' => 'Project #1'],
    ['title' => 'Project #2'],
    ['title' => 'Project #3'],
    ['title' => 'Project #4'],
];

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
