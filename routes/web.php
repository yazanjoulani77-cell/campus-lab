<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Exercise 3: Basic routes
Route::get('/hello', function () {
    return 'Hello Laravel';
});

Route::get('/students', function () {
    return 'All Students';
});

Route::get('/students/{id}', function ($id) {
    return "Student ID: {$id}";
});

Route::get('/courses/{courseId}/students', function ($courseId) {
    return "Students of Course ID: {$courseId}";
});

Route::post('/students', function () {
    return 'Student Created';
});

Route::put('/students/{id}', function ($id) {
    return "Student Updated: {$id}";
});

Route::delete('/students/{id}', function ($id) {
    return "Student Deleted: {$id}";
});

// Exercise 4: Route parameters and constraints
Route::get('/products/{id}', function ($id) {
    return "Product ID: {$id}";
})->whereNumber('id');

Route::get('/students/{id}/edit', function ($id) {
    return "Edit Student ID: {$id}";
});
