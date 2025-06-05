<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

// Route to show the home page
Route::get('/', function () {
    return view('home');  // Loads resources/views/home.blade.php
})->name('home');

// Route to show the form
Route::get('/items/create', [ItemsController::class, 'create'])->name('items.create');

// Route to handle form submission (POST)
Route::post('/items', [ItemsController::class, 'store'])->name('items.store');
