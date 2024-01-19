<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;


Route::get('/index', function () {
    return view('index');
});

Route::get('/', 'HomeController@index');
Route::post('/submit-form', 'FormController@submitForm');



Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/register', [PageController::class, 'register'])->name('register');


Route::get('/', function () {
    return view('welcome');
});
