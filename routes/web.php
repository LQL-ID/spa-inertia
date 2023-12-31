<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home', [
        'time' => now()->toTimeString(),
    ]);
});

Route::get('/user', function () {
    return Inertia::render('User', [
        'time' => now()->toTimeString(),
    ]);
});

Route::get('/setting', function () {
    return Inertia::render('Setting', [
        'time' => now()->toTimeString(),
    ]);
});

Route::post('/logout', function () {
    dd('Logout');
});
