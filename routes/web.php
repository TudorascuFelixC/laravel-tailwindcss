<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
})->name('register'); // Define the named route "register" here


Route::get('/login', function () {
    return view('login');
})->name('login'); // Define the named route "register" here


Route::get('/main-index', function () {
    return view('main-index');
})->name('main-index'); // Define the named route "register" here

