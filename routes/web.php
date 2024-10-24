<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserCourseController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderHistoryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/users', [UserController::class, 'index'])->name('users.index');

    Route::get('/admin/courses', [CourseController::class, 'index'])->name('admin.courses.index');
    Route::get('/admin/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
    Route::get('/admin/courses/{course}/edit', [CourseController::class, 'edit'])->name('admin.courses.edit');
    Route::put('/admin/courses/{course}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/admin/courses/{course}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');
    Route::post('/admin/courses/store', [CourseController::class, 'store'])->name('admin.courses.store');

    Route::resource('admin/categories', CategoryController::class);
    Route::resource('categories', CategoryController::class);

    Route::get('admin/history', [OrderHistoryController::class, 'index'])->name('history.index');
});


Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/courses', [UserCourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/{id}', [UserCourseController::class, 'show'])->name('courses.show');
    
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/checkout/{course}', [OrderController::class, 'checkout'])->name('checkout');
    
    Route::post('/purchase', [OrderController::class, 'purchase'])->name('purchase');
    
    Route::get('/order/history', [OrderController::class, 'history'])->name('order.history');
    
    Route::view('about', 'about')->name('about');

    Route::get('/user/courses/purchased', [UserCourseController::class, 'purchasedCourses'])->name('purchased');

});

require __DIR__ . '/auth.php';
