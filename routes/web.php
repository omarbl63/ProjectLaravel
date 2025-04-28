<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\TopicController;

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/


Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');



/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/topics', function () {
    return view('topics');
})->name('topics');

Route::get('/topics', [TopicController::class, 'index'])->name('topics.index');
/*
|--------------------------------------------------------------------------
| Admin Routes - Protected by Middleware
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', function () {
    return view('layouts.admin');
})->name('admin')->middleware(['auth', 'admin']);




Route::middleware(['auth', 'admin'])->group(function () {
    // Admin routes for topics
    Route::get('/admin/topics', [TopicController::class, 'adminIndex'])->name('admin.topics.index');
    Route::get('/admin/topics/create', [TopicController::class, 'create'])->name('admin.topics.create');
    Route::post('/admin/topics', [TopicController::class, 'store'])->name('admin.topics.store');
    Route::get('/admin/topics/{topic}/edit', [TopicController::class, 'edit'])->name('admin.topics.edit');
    Route::put('/admin/topics/{topic}', [TopicController::class, 'update'])->name('admin.topics.update');
    Route::delete('/admin/topics/{topic}', [TopicController::class, 'destroy'])->name('admin.topics.destroy');
});



// Route for to filter by category

Route::get('/categories/{category}', [TopicController::class, 'showByCategory'])->name('topics.byCategory');
