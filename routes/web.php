<?php

use App\Http\Controllers\NoteController;
Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::get('/index', [NoteController::class, 'index'])->name('index');
Route::post('/notes', [NoteController::class, 'store']);
Route::put('/notes/{note}', [NoteController::class, 'update']);
Route::delete('/notes/{note}', [NoteController::class, 'destroy']);
Route::get('/home',[NoteController::class,'home']);