<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChangePasswordController;


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

Route::get('/usersubscription', function () {
    return view('usersubscription');
})->name('usersubscription') -> middleware('auth');

Route::get('/contactsList', function () {
    return view('contactsList');
})->name('contactsList') -> middleware('auth');

Route::get('/packagesSent', function () {
    return view('packagesSent');
})->name('packagesSent') -> middleware('auth');

Route::get('/usersAdmin', function () {
    return view('usersAdmin');
})->name('usersAdmin') -> middleware('auth');

Route::get('/settings', function () {
    return view('settings');
})->name('settings')->middleware('auth');

// Route to display the form
Route::get('/passwordChange', [ChangePasswordController::class, 'showForm'])
    ->middleware('auth')
    ->name('passwordChange');

// Route to handle form submission
Route::post('/passwordChange', [ChangePasswordController::class, 'changePassword'])
    ->middleware('auth')
    ->name('passwordChange.submit');



Route::get('/users', [UserController::class, 'getAllUsers']); // Define the named route "users" here
