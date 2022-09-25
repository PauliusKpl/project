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
    return view('airports');
});

Route::get('/countries', function () {
    return view('countries');
});

Route::get('/airlines', function () {
    return view('airlines');
});

Route::get('/addAirline', function () {
    return view('addAirline');
});

Route::get('/removeAirline', function () {
    return view('removeAirline');
});

Route::get('/editAirport', function () {
    return view('editAirport');
});

Route::get('/removeAirport', function () {
    return view('removeAirport');
});

Route::get('/createCountry', function () {
    return view('createCountry');
});

Route::get('/createAirline', function () {
    return view('createAirline');
});

Route::get('/unlinkAirline', function () {
    return view('unlinkAirline');
});

Route::get('/createAirport', function () {
    return view('createAirport');
});

Route::get('/editAirline', function () {
    return view('editAirline');
});

Route::get('/editCountry', function () {
    return view('editCountry');
});

Route::get('/removeCountry', function () {
    return view('removeCountry');
});