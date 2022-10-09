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

Route::post('/airports/create', [AirportController::class, 'store'])->name('airports/store');

Route::get('/airports/{id}/addAirline', [AirportController::class, 'addAirline'])->name('airports/addAirline');

Route::post('/airports/{id}/addAirline', [AirportController::class, 'storeAirline'])->name('airports/storeAirline');

Route::get('/airports/{id}/edit', [AirportController::class, 'edit'])->name('airports/edit');

Route::post('/airports/{id}/edit', [AirportController::class, 'update'])->name('airports/update');

Route::get('/airports/{id}/delete', [AirportController::class, 'delete'])->name('airports/delete');

Route::post('/airports/{id}/delete', [AirportController::class, 'remove'])->name('airports/remove');

Route::get('/countries', [CountryController::class, 'index'])->name('countries');

Route::get('/countries/create', [CountryController::class, 'create'])->name('countries/create');

Route::post('/countries/create', [CountryController::class, 'store'])->name('countries/store');

Route::get('/countries/{id}/edit', [CountryController::class, 'edit'])->name('countries/edit');

Route::post('/countries/{id}/edit', [CountryController::class, 'update'])->name('countries/update');

Route::get('/countries/{id}/delete', [CountryController::class, 'delete'])->name('countries/delete');

Route::post('/countries/{id}/delete', [CountryController::class, 'remove'])->name('countries/remove');

Route::get('/airlines', [AirlineController::class, 'index'])->name('airlines');

Route::get('airlines/create', [AirlineController::class, 'create'])->name('airlines/create');

Route::post('airlines/create', [AirlineController::class, 'store'])->name('airlines/store');

Route::get('/airlines/{id}/edit', [AirlineController::class, 'edit'])->name('airlines/edit');

Route::post('/airlines/{id}/edit', [AirlineController::class, 'update'])->name('airlines/update');

Route::get('/airlines/{id}/delete', [AirlineController::class, 'delete'])->name('airlines/delete');

Route::post('/airlines/{id}/delete', [AirlineController::class, 'remove'])->name('airlines/remove');