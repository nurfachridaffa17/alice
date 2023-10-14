<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;

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

//Login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');

//Home
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('/register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

// Mahasiswa
Route::get('mahasiswa/getall', [MahasiswaController::class, 'getAllMahasiswa'])->name('getAllMahasiswa')->middleware('auth');
Route::get('mahasiswa/add', [MahasiswaController::class, 'addMahasiswa'])->name('addMahasiswa')->middleware('auth');
Route::post('mahasiswa/save', [MahasiswaController::class, 'saveMahasiswa'])->name('saveMahasiswa')->middleware('auth');
Route::get('mahasiswa/get/{id}', [MahasiswaController::class, 'getMahasiswa'])->name('getMahasiswa')->middleware('auth');
Route::post('mahasiswa/update', [MahasiswaController::class, 'updateMahasiswa'])->name('updateMahasiswa')->middleware('auth');
Route::get('mahasiswa/delete/{id}', [MahasiswaController::class, 'deleteMahasiswa'])->name('deleteMahasiswa')->middleware('auth');

