<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*Retourne la vue de facon statique*/ 
Route::View('/','lol');
/*Retourne la vue de facon statique grace au Controlleru*/ 
Route::get('/products', [ProductController::class, 'index'])
    ->name('produits.index');

Route::get('/products/create' , [ProductController::class, 'create'])
    ->name('products.create');

Route::post('/products/store', [ProductController::class,'store'])
->name('products.store');