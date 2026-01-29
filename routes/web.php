<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');


// Main Pages
Route::get('/', function () {
    return view('pages.main.homepage');
})->name('homepage');

Route::get('/contact', function () {
    return view('pages.main.contact');
})->name('contact');


// Backend Login
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';
