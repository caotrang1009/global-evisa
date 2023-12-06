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

Route::get('/', function() {
    return view('home');
});

Route::get('/flights', function() {
    return view('flights.index');
});

Route::get('/flights/search', function () {
    return view('flights.search');
});

Route::get('/flights/multi-city', function () {
    return view('flights.multi_city');
});

Route::get('/flights/information', function () {
    return view('flights.information');
});

Route::get('/flights/review-information', function () {
    return view('flights.review-information');
});

Route::get('/flights/payment', function () {
    return view('flights.payment');
});

Route::get('/flights/confirm-payment', function () {
    return view('flights.confirm_payment');
});

Route::get('/visa', function() {
    return view('visa.index');
});

Route::get('/visa/country/{alias}', function($alias) {
    return view('visa.detail', ['alias' => $alias]);
});

Route::get('/visa/apply/{step?}', function($step = null) {
    return view('visa.apply', ['step' => $step]);
});