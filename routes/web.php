<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ProfileController;
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
    return view('/cars/carousel');
});


Route::group(['middlewere' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('welcome2');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';

Route::get('/welcome2', function () {
    return view('welcome2');
});

Route::get('/cars/carousel', function () {
    return view('cars.carousel');
});

Route::get('/cars/index', [CarsController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarsController::class, 'create'])->name('cars.create')->middleware('auth');

Route::get('/cars/edit/{cars}', [CarsController::class, 'edit'])->name('cars.edit')->middleware('auth');
Route::post('/cars/{cars}', [CarsController::class, 'update'])->name('cars.update')->middleware('auth');
Route::delete('/cars/{cars}/destroy', [CarsController::class, 'destroy'])->name('cars.destroy')->middleware('auth');


Route::post('/cars', [CarsController::class, 'store'])->name('cars.store');
