<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\SettingsController;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminLessonController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Protected routes (must be logged in)

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
    Route::post('/lessons/{lesson}/complete', [LessonController::class, 'markAsDone'])->name('lessons.markDone');
    Route::get('/my-lessons', [UserController::class, 'index'])->name('users.lessons');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/students', [AdminStudentController::class, 'index'])->name('students.index');
    // Full CRUD routes for courses and lessons
    Route::resource('courses', AdminCourseController::class)->except(['show']);
    Route::resource('lessons', AdminLessonController::class);
});


require __DIR__ . '/auth.php';
