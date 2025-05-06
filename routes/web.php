<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Halaman login
// Route login (menampilkan form login)
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk melakukan login
Route::post('/', [AuthController::class, 'login'])->name('login.process');

// Halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Halaman leads (calon customer)
Route::get('/leads', function () {
    return view('leads');
})->name('leads.index');

// Halaman produk
Route::get('/products', function () {
    return view('products');
})->name('products.index');

// Halaman project
Route::get('/projects', function () {
    return view('projects');
})->name('projects.index');

// Halaman customer
Route::get('/customers', function () {
    return view('customers');
})->name('customers.index');