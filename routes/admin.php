<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DasashboardController;

Route::prefix('admin')->group(function () {
    Route::get('/admin/dash', [DashboardController::class, 'index']);
    // ->middleware(['auth'])->name('dash');

    Route::resource('carousels', 'App\Http\Controllers\CarouselController');
    Route::resource('slogans', 'App\Http\Controllers\SloganController');
    Route::resource('testimonials', 'App\Http\Controllers\TestimonialController');
    Route::resource('agencies', 'App\Http\Controllers\AgencyController');
    Route::resource('permis', 'App\Http\Controllers\PermisController');
});
