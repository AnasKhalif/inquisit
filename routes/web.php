<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OverviewController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/overview', [OverviewController::class, 'index'])->name('overview.index');
Route::get('/overview/category/{categoryId}', [OverviewController::class, 'categoryDetails'])->name('overview.categoryDetails');
Route::get('overview/category/{categoryId}/participant/{participantId}/export', [OverviewController::class, 'export'])->name('overview.export');
Route::get('overview/category/{categoryId}/participant/{participantId}/export-pdf', [OverviewController::class, 'exportPdf'])->name('overview.exportPdf');
Route::get('/overview/category/{categoryId}/participant/{participantId}', [OverviewController::class, 'categoryDetails'])->name('overview.categoryDetails');
Route::delete('/participants/{id}', [ParticipantController::class, 'destroy'])->name('participants.destroy');
Route::get('/participants/{id}/detail', [ParticipantController::class, 'show'])->name('participants.show');

Route::get('/participants', [ParticipantController::class, 'create'])->name('participants.create');
Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store');

Route::get('/test/start/{participantId}', [TestController::class, 'start'])->name('test.start');
Route::get('/test/instructions/{participantId}/{categoryId}', [TestController::class, 'instructions'])->name('test.instructions');
Route::get('/test/questions/{participantId}/{categoryId}/{questionId?}', [TestController::class, 'questions'])->name('test.questions');
Route::post('/test/storeAnswer/{participantId}/{categoryId}/{questionId}', [TestController::class, 'storeAnswer'])->name('test.storeAnswer');
Route::get('/test/relax/{participantId}/{categoryId}', [TestController::class, 'relax'])->name('test.relax');
Route::get('/test/instructions/type/{participantId}/{categoryId}/{questionId}', [TestController::class, 'instructionsType'])->name('test.instructionsType');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Route untuk mengedit kategori
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

Route::post('/test/effort/{participantId}/{categoryId}', [TestController::class, 'storeEffort'])->name('test.storeEffort');

Route::get('/reseeder', function () {
    // Jalankan migrate:fresh --seed
    \Artisan::call('migrate:fresh', ['--seed' => true]);
    return 'Database has been reset and reseeded!';
})->name('reseeder');
