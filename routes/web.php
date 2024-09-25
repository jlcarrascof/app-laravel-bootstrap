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

Route::get('/', function () {
    echo '<a href="/customers">Client #1</a><br>';
    echo '<a href="/customers">Client #2</a><br>';
    echo '<a href="/customers">Client #3</a><br>';
    echo '<a href="/customers">Client #4</a><br>';
    echo '<a href="/customers">Client #5</a><br>';
});

Route::get('contact', function () {
    return "Contact Page";
});

Route::get('greetings/{name?}', function ($name = 'Guest') {
    return "Hello $name";
});

Route::get('customers', function () {
    return "Customers Section";
});
