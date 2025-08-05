<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Subcategory;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/kontakt', function(){
    return view('kontakt');
})->name('kontakt');


Route::post('/dodaj-do-zamowienia', [OrderController::class, 'dodajDoZamowienia'])->name('dodaj.do.zamowienia');

Route::get('/zamowienie', [OrderController::class, 'pokazFormularz'])->name('zamowienie');

Route::get('/zamowienie/usun/{index}', [OrderController::class, 'usunProdukt'])->name('zamowienie.usun');

Route::post('/zamowienie/finalizuj', [OrderController::class, 'finalizuj'])->name('zamowienie.finalizuj');

Route::get('/zamowienie/potwierdzenie', function(){
    return view('zamowienie-potwierdzenie');
})->name('zamowienie.potwierdzenie');


Route::get('/kostka-brukowa', [CategoryController::class, 'showKostka'])->name('category.kostka');

Route::get('/baseny', [CategoryController::class, 'showBaseny'])->name('category.baseny');

Route::get('{categorySlug}', [CategoryController::class, 'show'])->name('category.show');

Route::get('{categorySlug}/{subcategorySlug}', [SubcategoryController::class, 'show'])->name('subcategory.show');

Route::get('/{categorySlug}/{subcategorySlug}/{productSlug}', [ProductController::class, 'show'])->name('product.show');
