<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'ShowAllStudent'])->name('users');
Route::get('update', function () {
    return view('user');
})->name('update');
Route::post('insertStudent', [StudentController::class, 'AddStudent'])->name('student.insert');
Route::post('UpdateStudent/{id}', [StudentController::class, 'UpdateStudent'])->name('student.update');
Route::view('adduser', 'addstudent')->name('add.student');
Route::get('user/{id}', [StudentController::class, 'viewStudent'])->name('view.student');
Route::get('user/delete/{id}', [StudentController::class, 'DeleteStudent'])->name('delete.student');
Route::get('showUser/{id}', [StudentController::class, 'ShowUser'])->name('show.student');
