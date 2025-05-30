<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

// Home route (optional)
Route::get('/', function () {
    return redirect()->route('items.create');  // Redirects to the form
});

// Route to show the form
Route::get('/items/create', [ItemsController::class, 'create'])->name('items.create');

// Route to handle form submission (POST)
Route::post('/items', [ItemsController::class, 'store'])->name('items.store');
