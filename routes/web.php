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
    return view('flights.order.information');
});

Route::get('/flights/review-information', function () {
    return view('flights.order.review-information');
});

Route::get('/flights/payment', function () {
    return view('flights.order.payment');
});

Route::get('/flights/payment-success/online', function() {
    return view('flights.order.success_onl');
});

Route::get('/flights/payment-success/bank-transfer', function() {
    return view('flights.order.success_transfer');
});

Route::get('/flights/payment-failure', function() {
    return view('flights.order.failure');
});

//visa

Route::get('/visa', function() {
    return view('visa.index');
});

Route::get('/visa/country/{alias}', function($alias) {
    return view('visa.detail', ['alias' => $alias]);
});

Route::get('/visa/information', function () {
    return view('visa.apply.information');
});

Route::get('/visa/payment', function () {
    return view('visa.apply.payment');
});

Route::get('/visa/payment-success/online', function() {
    return view('visa.apply.success_onl');
});

Route::get('/visa/payment-success/bank-transfer', function() {
    return view('visa.apply.success_transfer');
});

Route::get('/visa/payment-failure', function() {
    return view('visa.apply.failure');
});

//account

Route::get('/account', function() {
    return view('account.index');
});

Route::get('/account/bookings', function() {
    return view('account.bookings.index');
})->name('account.bookings');

Route::get('/account/invoices', function() {
    return view('account.invoice.detail');
})->name('account.invoice');

Route::get('/account/profile', function() {
    return view('account.profile.edit');
})->name('account.profile');