<?php

use App\Http\Controllers\SelectedCoursesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseRegistrationController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileSettingController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Define the dashboard route
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    // Home
    Route::get('/home', function () {
        return view('home'); // Make sure you have a 'home.blade.php' in your views directory
    })->name('home');

    // Course Registration
    Route::get('/course-registration', [CourseRegistrationController::class, 'index'])->name('course.registration.index');
    Route::post('/course-registration', [CourseRegistrationController::class, 'register'])->name('course.registration.register');

    // See Selected Courses
    Route::get('/selected-courses', [SelectedCoursesController::class, 'index'])->name('selected.courses.index');

    // Announcements
    Route::resource('announcements', AnnouncementController::class)->only(['index']);

    // Attendance
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');

    // Grades
    Route::get('/grades', [GradeController::class, 'index'])->name('grades.index');
    Route::get('/grades/{id}', [GradeController::class, 'show'])->name('grades.show');

    Route::get('/curriculum', function () {
        return view('curriculum');
    })->name('curriculum');

    Route::get('/records', function () {
        return view('records');
    })->name('records');


});
Route::get('/profile-setting', [ProfileSettingController::class, 'index'])->name('profile.setting');
