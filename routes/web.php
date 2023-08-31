<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterUserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterUserController::class, 'register'])->name('register.submit');


Route::get('/login', function () {
    return view('login');
    })->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard-overview', function () {
    return view('dashboard-overview');
})->name('dashboard-overview')->middleware('auth');

Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard-admin');



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



Route::get('/usersubscription', function () {
    return view('usersubscription');
})->name('usersubscription') -> middleware('auth');

Route::get('/contactsList', function () {
    return view('contactsList');
})->name('contactsList') -> middleware('auth');

Route::get('/packagesSent', function () {
    return view('packagesSent');
})->name('packagesSent') -> middleware('auth');
