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

use Illuminate\Support\Facades\Route;

Route::prefix('setting')->group(function() {
    Route::prefix('libur')->group(function() {
        Route::get('/', 'LiburController@index'); 
    });

    Route::prefix('jam')->group(function() {
        Route::get('/', 'JamController@index'); 
    });
});
