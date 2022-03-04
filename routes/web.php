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
    return view('welcome');
});

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login']);

Route::prefix('owner')->group(function () {
    Route::get('/', [\App\Http\Controllers\ViewController::class, 'show']);
    Route::get('/index', [\App\Http\Controllers\ViewController::class, 'show']);

    //class
    Route::prefix('class')->group(function () {
        Route::get('/add', [\App\Http\Controllers\ViewController::class, 'store']);
        Route::get('/{id}', [\App\Http\Controllers\ViewController::class, 'showClass']);
    });

    Route::prefix('roll-call')->group(function () {
        Route::get('/', [\App\Http\Controllers\ViewController::class, 'showRollCall']);
        Route::get('/index', [\App\Http\Controllers\ViewController::class, 'showRollCall']);
    });

    Route::prefix('day-off')->group(function () {
        Route::get('/', [\App\Http\Controllers\ViewController::class, 'showDayOff']);
        Route::get('/create', [\App\Http\Controllers\ViewController::class, 'storeDayOff']);
    });
});

Route::get('/owner/class', [\App\Http\Controllers\OwnerController::class, 'getClass']);

Route::get('/owner/class', [\App\Http\Controllers\OwnerController::class, 'getClass']);
