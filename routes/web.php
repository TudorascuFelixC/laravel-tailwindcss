<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterUserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterUserController::class, 'register'])->name('register.submit');
// Route::get('/register', function () {
//     return view('register');
// })->name('register'); // Define the named route "register" here


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

Route::get('/dashboard-overview', function () {
    return view('dashboard-overview');
})->name('dashboard-overview'); // Define the named route "dashboard" here

Route::get('/usersubscription', function () {
    return view('usersubscription');
})->name('usersubscription'); // Define the named route "userprofile" here

