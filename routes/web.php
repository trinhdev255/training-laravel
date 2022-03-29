<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\note;
use App\Http\Controllers\CarController;

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
Route::resource('note', note::class);
Route::resource('car', CarController::class);
Route::post('/deletecheckedcars',  [CarController::class, 'deleteCheckedCar']);
Route::post('/updateallcars', [CarController::class, 'updateAllCar']);


