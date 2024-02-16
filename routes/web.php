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
    return view('welcome');
});

Route::get('/acc', function () {
    return view('accept');
});

Route::get('/date', function() {
    return view('date');
});

Route::get('/food', function () {
    return view('food');
});

Route::get('/dessert', function () {
    return view('dessert');
});

Route::get('/place', function () {
    return view('place');
});

Route::get('/flower', function () {
    return view('flower');
});