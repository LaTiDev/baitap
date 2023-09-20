<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

//home fe
Route::get('/', [HomeController::class,'index'])->name('index');

//login
Route::get('/login', [UserController::class,'login'])->name('login');
Route::post('/login', [UserController::class,'postLogin']);

//register
Route::get('/register', [UserController::class,'register'])->name('register');
Route::post('/register', [UserController::class,'postRegister']);

//logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//admin
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name('admin.index');

    //category
    Route::resource('category', CategoryController::class);
});