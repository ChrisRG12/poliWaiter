<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    //Menús
    Route::get('/menuAlimentos', function () {
        return view('menuAlimentos');
    })->name('menuAlimentos');

    Route::get('/menuBebidas', function () {
        return view('menuBebidas');
    })->name('menuBebidas');

    Route::get('/menuSnacks', function () {
        return view('menuSnacks');
    })->name('menuSnacks');




});
