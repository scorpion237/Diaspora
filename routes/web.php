<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/service',[HomeController::class, 'service']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/control', [DashboardController::class, 'index'])->middleware(['auth'])->name('control');




// Route crud Slogan

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/slogans/create', [DashboardController::class, 'createSlogan'])->name('slogans.create');
    Route::post('/slogans', [DashboardController::class, 'storeSlogan'])->name('slogans.store');
    Route::get('/slogans/{slogan}/edit', [DashboardController::class, 'editSlogan'])->name('slogans.edit');
    Route::put('/slogans/{slogan}', [DashboardController::class, 'updateSlogan'])->name('slogans.update');
    Route::delete('/slogans/{slogan}', [DashboardController::class, 'destroySlogan'])->name('slogans.destroy');
});


//route crud testimonials


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/testimonials/create', [DashboardController::class, 'createtestimonial'])->name('testimonials.create');
    Route::post('/home/testimonials', [DashboardController::class, 'storetestimonial'])->name('testimonials.store');
    Route::get('/home/testimonials/{testimonial}/edit', [DashboardController::class, 'edittestimonial'])->name('testimonials.edit');
    Route::put('/home/testimonials/{testimonial}', [DashboardController::class, 'updatetestimonial'])->name('testimonials.update');
    Route::delete('/home/testimonials/{testimonial}', [DashboardController::class, 'destroytestimonial'])->name('testimonials.destroy');
});

//Permis
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/home/permis/create', [DashboardController::class, 'createpermis'])->name('permis.create');
    Route::post('/home/permis', [DashboardController::class, 'storepermis'])->name('permis.store');
    Route::get('/home/permis/{permis}/edit', [DashboardController::class, 'editpermis'])->name('permis.edit');
    Route::put('/home/permis/{permis}', [DashboardController::class, 'updatepermis'])->name('permis.update');
    Route::delete('/home/permis/{permis}', [DashboardController::class, 'destroypermis'])->name('permis.destroy');
});

// agencies


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/home/agencies/create', [DashboardController::class, 'createagency'])->name('agencies.create');
    Route::post('/home/agencies', [DashboardController::class, 'storeagency'])->name('agencies.store');
    Route::get('/home/agencies/{agency}/edit', [DashboardController::class, 'editagency'])->name('agencies.edit');
    Route::put('/home/agencies/{agency}', [DashboardController::class, 'updateagency'])->name('agencies.update');
    Route::delete('/home/agencies/{agency}', [DashboardController::class, 'destroyagency'])->name('agencies.destroy');
});

//carousel
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/home/carousels/create', [DashboardController::class, 'createcarousel'])->name('carousels.create');
    Route::post('/home/carousels', [DashboardController::class, 'storecarousel'])->name('carousels.store');
    Route::get('/home/carousels/{carousel}/edit', [DashboardController::class, 'editcarousel'])->name('carousels.edit');
    Route::put('/home/carousels/{carousel}', [DashboardController::class, 'updatecarousel'])->name('carousels.update');
    Route::delete('/home/carousels/{carousel}', [DashboardController::class, 'destroycarousel'])->name('carousels.destroy');
});

Route::prefix('admin')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    // ->middleware(['auth'])->name('dash');

    Route::resource('carousels', 'App\Http\Controllers\CarouselController');
    Route::resource('slogans', 'App\Http\Controllers\SloganController');
    Route::resource('testimonials', 'App\Http\Controllers\TestimonialController');
    Route::resource('agencies', 'App\Http\Controllers\AgencyController');
    Route::resource('permis', 'App\Http\Controllers\PermisController');
});

require __DIR__.'/auth.php';
