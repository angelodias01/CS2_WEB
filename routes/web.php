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

// Define routes for each page
Route::get('/', function () {
    return view('home');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/maps', function () {
    return view('maps');
});

Route::get('/skins', function () {
    return view('skins');
});

Route::get('/statistics', function () {
    return view('statistics');
});










//garcia
