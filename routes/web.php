<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use Illuminate\Console\View\Components\Component;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('formdaftar', [DaftarController::class, 'index'])->name('formdaftar');
Route::post('login', [LoginController::class, 'proses'])->name('login.proses');
Route::get('login/keluar', [LoginController::class, 'keluar'])->name('login.keluar');
Route::get('user', function () {
    $data['currentPage'] = 'user';
    return view('users.index', $data);
})
    ->name('users')
    ->middleware('auth');

Route::get('akademik', function () {
    $data['currentPage'] = 'daftar';
    return view('akademik.index', $data);
})
    ->name('akademik')
    ->middleware('auth');

Route::get('nonakademik', function () {
    $data['currentPage'] = 'd';
    return view('nonakademik.index', $data);
})
    ->name('nonakademik')
    ->middleware('auth');
