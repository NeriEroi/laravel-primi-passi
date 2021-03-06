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
    return view('home');
});

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
