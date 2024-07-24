<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'ShowAllStudent'])->name('users');
Route::get('/update', function () {
    return view('user');
})->name('update');
Route::get('/user/{id}', [StudentController::class, 'viewStudent'])->name('view.student');
Route::get('/user/delete/{id}', [StudentController::class, 'DeleteStudent'])->name('delete.student');
