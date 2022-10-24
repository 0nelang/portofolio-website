<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Controller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'landing']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/projects', [HomeController::class, 'projects']);
Route::get('/contact', [HomeController::class, 'contact']);
// Route::get('/dashboard/user', [SiswaController::class, 'index'])->name("user.index");
Route::get('/register', [AuthController::class, 'register'])->middleware('guest')->name('register.page');
Route::post('/register', [AuthController::class, 'buat'])->name('buat.page');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'proseslogin'])->name('proses.page');
Route::post('/', [AuthController::class, 'logout'])->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.blank');
    });
    Route::resource('dashboard/siswa', SiswaController::class);
    Route::resource('/dashboard/kontak', KontakController::class);
    Route::resource('/dashboard/project', ProjectController::class);
    Route::get('dashboard/project/create/{id}', [ProjectController::class, 'create'])->name('createproject.create');
});

Route::get('pagenotfound', function () {
    return "not found";
});
