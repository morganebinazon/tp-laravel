<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/',[ProductController::class,'index'])->name('products.index');

Route::get('/edit-product/{id}',[ProductController::class,'add_product']);

Route::get('/edit-create',[ProductController::class,'create'])->name('products.create');


Route::post('/add-product',[ProductController::class,'store'])->name('products.store');

Route::get('/update-product/{id}',[ProductController::class,'edit'])->name('products.edit');

Route::post('/product/update/{id}',[ProductController::class,'update'])->name('products.update');

Route::delete('/delete-product/{id}',[ProductController::class,'destroy'])->name('products.destroy');


Route::resource('categories', CategoryController::class);

