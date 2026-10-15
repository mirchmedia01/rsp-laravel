<?php

use App\Http\Controllers\PharmacyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PharmacyController::class, 'home'])->name('home');
Route::get('/about', [PharmacyController::class, 'about'])->name('about');
Route::get('/vaccinations', [PharmacyController::class, 'vaccinations'])->name('vaccinations');
Route::get('/services', [PharmacyController::class, 'services'])->name('services');
Route::get('/services/dispill', [PharmacyController::class, 'dispill'])->name('dispill');
Route::get('/services/dmv-vision-test', [PharmacyController::class, 'dmvVision'])->name('dmv');
Route::get('/services/delivery', [PharmacyController::class, 'delivery'])->name('delivery');
Route::get('/refill', [PharmacyController::class, 'refill'])->name('refill');
Route::post('/refill', [PharmacyController::class, 'storeRefill'])->name('refill.store');
Route::get('/transfer', [PharmacyController::class, 'transfer'])->name('transfer');
Route::post('/transfer', [PharmacyController::class, 'storeTransfer'])->name('transfer.store');
Route::get('/faq', [PharmacyController::class, 'faq'])->name('faq');
Route::get('/contact', [PharmacyController::class, 'contact'])->name('contact');
Route::post('/contact', [PharmacyController::class, 'storeContact'])->name('contact.store');
