<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminContactMessageController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminExperienceController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminSkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:contact')->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'authenticate']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::resource('projects', AdminProjectController::class)->except('show');
        Route::resource('skills', AdminSkillController::class)->except('show');
        Route::resource('experiences', AdminExperienceController::class)->except('show');
        Route::resource('services', AdminServiceController::class)->except('show');

        Route::get('/messages', [AdminContactMessageController::class, 'index'])->name('messages.index');
        Route::get('/messages/{contactMessage}', [AdminContactMessageController::class, 'show'])->name('messages.show');
        Route::delete('/messages/{contactMessage}', [AdminContactMessageController::class, 'destroy'])->name('messages.destroy');
    });
});
