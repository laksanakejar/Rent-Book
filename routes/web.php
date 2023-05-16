<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

//Route FE
// Route::get('main', function () {
//     return view('layouts.main');
// });

// Route::get('book', function () {
//     return view('dashboard.book');
// });

Route::get('category', function () {
    return view('dashboard.category');
});

Route::get('dashboard', function () {
    return view('dashboard.index');
});

Route::get('rent-log', function () {
    return view('dashboard.rent-log');
});

//Route Edit and Admin
Route::get('/user', [AdminController::class, 'indexUsers'])->middleware('admin');
Route::get('/user/edit/{id}', [AdminController::class, 'edit'])->name('users.edit');
Route::post('/user/update/{id}', [AdminController::class, 'update'])->name('users.update');
Route::delete('/destroy{id}', [AdminController::class, 'destroy'])->name('users.destroy');
Route::post('/logout', [AdminController::class, 'logout']);

//Route Message
Route::get('/message', [MessageController::class, 'message']);
Route::post('/message/store', [MessageController::class, 'store'])->name('validate.store');

//Route Book
Route::get('/book', [BookController::class, 'book']);
Route::get('/create', [BookController::class, 'create'])->name('book.create');
Route::post('/store', [BookController::class, 'store'])->name('book.store');

//Route Register
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'indexRegister'])->name('register.post');

//Route Login
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'indexLogin'])->name('login.auth');

//Route User
Route::get('/dashboard-user', [UserController::class, 'index'])->middleware('auth');
Route::post('/logout', [UserController::class, 'logout']);