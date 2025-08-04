<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});

Route::get('/kostka-brukowa', [CategoryController::class, 'showKostka'])->name('category.kostka');

Route::get('/baseny', [CategoryController::class, 'showBaseny'])->name('category.baseny');
