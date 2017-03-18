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

Route::get('/the-adventures-of-sherlock-holmes', function () {
    return view('adventures-of-s-h');
});

Route::get('/the-memoirs-of-sherlock-holmes', function () {
    return view('memoires-of-s-h');
});

Route::get('/the-return-of-sherlock-holmes', function () {
    return view('return-of-s-h');
});

Route::get('/his-last-bow', function () {
    return view('his-last-bow');
});

Route::get('/the-case-book', function () {
    return view('the-case-book');
});

Route::get('/a-study-in-scarlet', function () {
    return view('study-in-scarlet');
});

Route::get('/sign-of-the-four', function () {
    return view('sign-of-the-four');
});

Route::get('/the-hound-of-baskervilles', function () {
    return view('the-hound');
});

Route::get('/the-valley-of-fear', function () {
    return view('the-valley-of-fear');
});
