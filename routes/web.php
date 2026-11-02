<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

// Part A
Route::get('/hello/{name}', function ($name) {
    return "Hello, " . $name;
});

Route::get('/about', [AboutController::class, 'index']);

// Part B + D
Route::resource('students', StudentController::class);

// Part C
Route::get('/roll/{roll}', [StudentController::class, 'show']);

// Part E
Route::get('/api/students', function () {
    return response()->json(\App\Models\Student::all());
});