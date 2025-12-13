<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



// Route::get('', function () {
//     return view('welcome');
// });

// Public

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/types', [PublicController::class, 'types'])->name('types');

Route::get('/paranoid', [PublicController::class, 'paranoid'])->name('paranoid');

Route::get('/hebephrenic', [PublicController::class, 'hebephrenic'])->name('hebephrenic');

Route::get('/residual', [PublicController::class, 'residual'])->name('residual');

Route::get('/catatonic', [PublicController::class, 'catatonic'])->name('public.catatonic');
Route::get('/undifferentiated', [PublicController::class, 'undifferentiated'])->name('public.undifferentiated');

Route::get('/about', [PublicController::class, 'about'])->name('about');

Route::get('/guide', [PublicController::class, 'guide'])->name('guide');

Route::get('/referrals', [PublicController::class, 'referrals'])->name('referrals');

Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

Route::get('/screening', [PublicController::class, 'screening'])->name('screening');

// Admin

Route::prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/tables', [AdminController::class, 'tables'])->name('admin.tables');

    Route::get('/charts', [AdminController::class, 'charts'])->name('admin.charts');

    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
});
