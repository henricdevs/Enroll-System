<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

use App\Http\Controllers\EnrollmentController;

Route::get('/enroll/{student}/{subject}', [EnrollmentController::class, 'enroll']);
Route::get('/', [EnrollmentController::class, 'index']);
Route::get('/enroll/{student}/{subject}', [EnrollmentController::class, 'enroll']);

use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students/store', [StudentController::class, 'store']);
Route::get('/students/edit/{id}', [StudentController::class, 'edit']);
Route::post('/students/update/{id}', [StudentController::class, 'update']);
Route::get('/students/delete/{id}', [StudentController::class, 'delete']);
Route::get('/student/{id}/progress', [StudentController::class, 'progress']);

use App\Http\Controllers\LevelController;

Route::get('/levels', [LevelController::class, 'index']);
Route::get('/levels/create', [LevelController::class, 'create']);
Route::post('/levels/store', [LevelController::class, 'store']);
Route::get('/levels/edit/{id}', [LevelController::class, 'edit']);
Route::post('/levels/update/{id}', [LevelController::class, 'update']);
Route::get('/levels/delete/{id}', [LevelController::class, 'delete']);

use App\Http\Controllers\SubjectController;

Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/subjects/create', [SubjectController::class, 'create']);
Route::post('/subjects/store', [SubjectController::class, 'store']);
Route::get('/subjects/edit/{id}', [SubjectController::class, 'edit']);
Route::post('/subjects/update/{id}', [SubjectController::class, 'update']);
Route::get('/subjects/delete/{id}', [SubjectController::class, 'delete']);

use App\Http\Controllers\PrerequisiteController;

Route::get('/prerequisites', [PrerequisiteController::class, 'index']);
Route::post('/prerequisites/store', [PrerequisiteController::class, 'store']);

use App\Http\Controllers\CompletionController;

Route::get('/completions', [CompletionController::class, 'index']);
Route::post('/completions/store', [CompletionController::class, 'store']);



