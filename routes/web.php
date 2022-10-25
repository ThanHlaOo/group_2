<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Language\LanguageController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.layouts.app');
});

//Language Route
Route::group(['prefix' => 'admin/languages'], function() {
    Route::get('/', [LanguageController::class, 'index'])->name('language.get');
});

//Course Route
Route::group(['prefix' => 'admin/courses'], function() {
    Route::get('/', [CourseController::class, 'index'])->name('course.get');
});

//Blog Route
Route::group(['prefix' => 'admin/blogs'], function() {
    Route::get('/', [BlogController::class, 'index'])->name('blog.get');
});

//User Route
Route::group(['prefix' => 'admin/users'], function() {
    Route::get('/', [UserController::class, 'index'])->name('user.get');
});