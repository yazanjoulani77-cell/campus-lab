<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Exercise 3: Basic routes
Route::get('/hello', function () {
    return 'Hello Laravel';
});

// Exercise 5: Student routes handled by StudentController
// /students/create must come before /students/{id}, otherwise "create" is taken as an id
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::post('/students', [StudentController::class, 'store']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);

// Exercise 5: Course routes handled by CourseController
Route::get('/courses/{courseId}/students', [CourseController::class, 'students']);

// Exercise 4: Route parameters and constraints
Route::get('/products/{id}', function ($id) {
    return "Product ID: {$id}";
})->whereNumber('id');

Route::get('/students/{id}/edit', function ($id) {
    return "Edit Student ID: {$id}";
});
