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

Route::get('/metode-regula-falsi', function(){
    return view('metodeRegulaFalsi');
})->name('metode-regula-falsi');

Route::get('/metode-titik-tetap', function(){
    return view('metodeTitikTetap');
})->name('metode-titik-tetap');

Route::get('/metode-newton-raphson', function(){
    return view('metodeNewtonRaphson');
})->name('metode-newton-raphson');

Route::get('/metode-secant', function(){
    return view('metodeSecant');
})->name('metode-secant');
