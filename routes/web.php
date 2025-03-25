<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/participants', [ParticipantController::class, 'create'])->name('participants.create');
Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store');

Route::get('/test/start/{participantId}', [TestController::class, 'start'])->name('test.start');
Route::get('/test/instructions/{participantId}/{categoryId}', [TestController::class, 'instructions'])->name('test.instructions');
Route::get('/test/questions/{participantId}/{categoryId}/{questionId?}', [TestController::class, 'questions'])->name('test.questions');
Route::post('/test/storeAnswer/{participantId}/{categoryId}/{questionId}', [TestController::class, 'storeAnswer'])->name('test.storeAnswer');
Route::get('/test/relax/{participantId}/{categoryId}', [TestController::class, 'relax'])->name('test.relax');
