<?php

use App\Http\Controllers\DasboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Route::get('/Dasboard', [DasboardController::class, 'index'])->name('dasboard');
Route::get('/Category', [CategoryController::class, 'index'])->name('Category.index');
Route::get('/Product', [ProductController::class, 'index'])->name('Product.index');
Route::get('/User', [UserController::class, 'index'])->name('User.index');
Route::get('/Role', [RoleController::class, 'index'])->name('Role.index');
