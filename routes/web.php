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

Route::get('/subscription', function () {
    return view('subscription');
})->name('subscription'); // Define the named route "register" here

Route::get('/test', function () {
    return view('test');
})->name('test'); // Define the named route "register" here

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); // Define the named route "dashboard" here

