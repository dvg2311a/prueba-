<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Controllers\ExcerciseController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\MediafileController;
use App\Http\Controllers\SuscriptionController;
use App\Http\Controllers\ActivityController;
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

Route::resource('pays', PayController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('excercises', ExcerciseController::class);

Route::resource('tests', TestController::class);

Route::resource('calendars', CalendarController::class);

Route::resource('mediafiles', MediafileController::class);

Route::resource('suscriptions', SuscriptionController::class);

Route::resource('activities', ActivityController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
