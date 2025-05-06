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
    return view('leads');  // Mengarah ke leads.blade.php
})->name('leads.index');
Route::resource('/leads', LeadController::class);
Route::post('/leads/{id}/proses', [LeadController::class, 'proses'])->name('leads.proses');
Route::post('/leads/{id}/batal', [LeadController::class, 'batal'])->name('leads.batal');

// Halaman produk
Route::resource('/product', ProductController::class);

// Halaman project
Route::resource('projects', ProjectController::class);
Route::put('/projects/{id}/approve', [ProjectController::class, 'approve'])->name('projects.approve');
Route::put('/projects/{id}/reject', [ProjectController::class, 'reject'])->name('projects.reject');

// Halaman customer
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

// Buat customer dari project yang sudah approved
Route::post('/customers/from-project/{id}', [CustomerController::class, 'storeFromProject'])->name('customers.fromProject');