<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'index']);

Route::post('/login-admin', [HomeController::class, 'loginAdmin'])->name('login-admin');


Auth::routes();

Route::get('/admin', [AdminController::class, 'index']);
