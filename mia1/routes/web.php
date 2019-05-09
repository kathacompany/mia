<?php

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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/user_profile', function () {
    return view('user_profile');
});
Route::get('/user_account', function () {
    return view('user_account');
});
Route::get('/user_orders', function () {
    return view('user_orders');
});
Route::get('/user_reservations', function () {
    return view('user_reservations');
});
Route::get('/user_events', function () {
    return view('user_events');
});
Route::get('/user_edit_info', function () {
    return view('user_edit_info');
});

