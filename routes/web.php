<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/resume', [PageController::class, 'resume'])->name('resume');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');

// Halaman Pengaduan (Contact)
Route::get('/contact', [PengaduanController::class, 'index'])->name('contact');
Route::post('/contact', [PengaduanController::class, 'store'])->name('contact.store');

// Autentikasi
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
