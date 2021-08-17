<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Language Routes
Route::get('languages', [LanguageController::class, 'index'])->name('language.index');
Route::get('languages/create', [LanguageController::class, 'create'])->name('language.create');
Route::post('languages/store', [LanguageController::class, 'store'])->name('language.store');
