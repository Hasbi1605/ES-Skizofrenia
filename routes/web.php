<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\DiagnosisController;
use App\Http\Controllers\Admin\RuleController;
use App\Http\Controllers\Admin\ScreeningHistoryController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\ScreeningController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\ContactController;



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
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Screening Routes
Route::get('/screening', [ScreeningController::class, 'index'])->name('screening');
Route::post('/screening/start', [ScreeningController::class, 'start'])->name('screening.start');
Route::get('/screening/confirm', [ScreeningController::class, 'confirm'])->name('screening.confirm');
Route::get('/screening/questions/{step}', [ScreeningController::class, 'questions'])->name('screening.questions');
Route::post('/screening/answers', [ScreeningController::class, 'storeAnswers'])->name('screening.storeAnswers');
Route::get('/screening/calculate', [ScreeningController::class, 'calculate'])->name('screening.calculate');
Route::get('/screening/result/{id}', [ScreeningController::class, 'result'])->name('screening.result');

// Admin Auth Routes (outside middleware)
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Routes (Protected)
Route::prefix('admin')->middleware('admin.auth')->group(function () {
    // Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // CMS Gejala (Symptoms)
    Route::resource('gejala', GejalaController::class)->names('admin.gejala');

    // CMS Diagnosis
    Route::resource('diagnosis', DiagnosisController::class)->names('admin.diagnosis');

    // Laporan User
    Route::resource('laporan', LaporanController::class)->names('admin.laporan');

    // CMS Rules (Knowledge Base)
    Route::get('rules', [RuleController::class, 'index'])->name('admin.rules.index');
    Route::get('rules/{diagnosis}/edit', [RuleController::class, 'edit'])->name('admin.rules.edit');
    Route::put('rules/{diagnosis}', [RuleController::class, 'update'])->name('admin.rules.update');

    // Screening History
    Route::get('history', [ScreeningHistoryController::class, 'index'])->name('admin.history.index');
    Route::get('history/{screening}', [ScreeningHistoryController::class, 'show'])->name('admin.history.show');

    // Legacy routes (keeping for backward compatibility)
    Route::get('/tables', [AdminController::class, 'tables'])->name('admin.tables');
    Route::get('/charts', [AdminController::class, 'charts'])->name('admin.charts');

});

