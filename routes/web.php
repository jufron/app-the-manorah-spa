<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/services', 'services')->name('services');
    Route::get('/services/{category:slug}', 'categoryServices')->name('services.category');
});

// Shortcut alias URL untuk Login dan Logout tanpa prefix /dashboard
Route::get('/login', function () {
    return redirect()->route('filament.admin.auth.login');
})->name('login');

Route::any('/logout', function () {
    return redirect()->route('filament.admin.auth.logout');
})->name('logout');