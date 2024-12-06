<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

Route::get('/', [ProductsController::class, 'index'])->name('home')->middleware('auth');
Route::get('/products/create', [ProductsController::class, 'create'])->name('product.create')->middleware('auth');
Route::post('/products/create', [ProductsController::class, 'store'])->name('product.store')->middleware('auth');

Route::get('/products/edit/{product}', [ProductsController::class, 'edit'])->name('product.edit');
Route::put('/products/{product}', [ProductsController::class, 'update'])->name('product.update');
Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->name('product.destroy');


Route::get('/categories', [CategoryController::class, 'index'])->name('category.index')->middleware('auth');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index')->middleware('auth');
Route::get('/newsletters',[ContactController::class, 'newsletters'])->name('newsletters.index')->middleware('auth');


Route::get('/privacy-policy', [PrivacyPolicyController::class, 'edit'])->name('privacy-policy.edit');
Route::put('/privacy-policy/update', [PrivacyPolicyController::class, 'update'])->name('privacy-policy.update');

Route::get('/terms-services', [TermsServicesController::class, 'edit'])->name('terms-services.edit');
Route::put('/terms-services/update', [TermsServicesController::class, 'update'])->name('terms-services.update');




