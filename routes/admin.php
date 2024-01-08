<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::get('/', [AdminController::class, 'index'])->name('admin');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
