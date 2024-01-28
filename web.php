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
    return view('index');
})->name('home');

Route::get('/mission', function () {
    return view('mission');
})->name('mission');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Redirect route from service_language to index
Route::get('/about/index', function () {
    return redirect()->route('index');
})->name('about_to_index');

// Redirect route from index to service_language
Route::get('/index/about', function () {
    return redirect()->route('about');
})->name('index_to_about');

Route::get('/about/mission', function () {
    return redirect()->route('mission');
})->name('about_to_mission');

// Redirect route from index to service_language
Route::get('/mission/about', function () {
    return redirect()->route('about');
})->name('mission_to_about');