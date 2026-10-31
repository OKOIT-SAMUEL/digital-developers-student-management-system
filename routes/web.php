<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegistrationController;


Route::get('', [HomeController::class, 'index'])->name('index');





Route::get('/students', [StudentController::class, 'students'])->name('students');

Route::get('/lecturers', [LecturerController::class, 'lecturers'])->name('lecturers');

Route::post('/students', [StudentController::class, 'store'])->name('student.store');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');



Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::get('/courses', [CourseController::class, 'courses'])->name('courses');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');





Route::get('/enroll', [RegistrationController::class, 'enroll']);
Route::post('/enroll', [RegistrationController::class, 'store']);
Route::get('/registrations', [RegistrationController::class, 'registrations'])->name('registrations');

Route::get('/add-student', [StudentController::class, 'addStudent']);
Route::post('/add-student', [StudentController::class, 'store']);
