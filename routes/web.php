<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.index');
    
})->name('user.index');

Route::get('/about', function () {
    return view('user.about');
})->name('user.about');

Route::get('/client', function () {
    return view('user.client');
})->name('user.client');

Route::get('/products', function () {
    return view('user.products');
})->name('user.products');

Route::get('/contact', function () {
    return view('user.contact');
})->name('user.contact');