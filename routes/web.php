<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AirlineController;

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

Route::get('/', function(){return redirect('/airports');});

Route::get('/airports', [AirportController::class, 'index'])->name('airports');

Route::get('/airports/create', [AirportController::class, 'create'])->name('airports/create');

Route::get('/countries', [CountryController::class, 'index'])->name('countries');

Route::get('/countries/create', [CountryController::class, 'create'])->name('countries/create');

Route::get('/airlines', [AirlineController::class, 'index'])->name('airlines');

Route::get('airlines/create', [AirlineController::class, 'create'])->name('airlines/create');