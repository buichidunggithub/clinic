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
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/recruit', function () {
    return view('recruit');
});

Route::get('/people', function () {
    return view('people');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/packages', function () {
    return view('packages');
});

Route::get('/news', function () {
    return view('news');
});