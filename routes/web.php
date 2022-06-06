<?php

use App\Http\Controllers\AmfibiController;
use App\Http\Controllers\AirController;
use App\Http\Controllers\DaratController;
use App\Http\Controllers\KandangController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MakananController;
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
})->name('welcome');

Route::get('/admin', function () {
    return view('admin');
})->name('admin')->middleware('auth');

Route::get('/about', function () {
    return view('about');
})->name('zoo-about');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authen'])->name('authen');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('store-register');

Route::get('/amfibi', [AmfibiController::class, 'index'])->name('index-amfibi');

Route::get('/admin/amfibi', [AmfibiController::class, 'admin_amfibi'])->name('browse-amfibi')->middleware('auth');
Route::get('/admin/amfibi/create', [AmfibiController::class, 'create'])->name('create-amfibi')->middleware('auth');
Route::post('/admin/amfibi/store', [AmfibiController::class, 'store'])->name('store-amfibi')->middleware('auth');
Route::get('/admin/amfibi/edit/{id}', [AmfibiController::class, 'edit'])->name('edit-amfibi')->middleware('auth');
Route::put('/admin/amfibi/update/{id}', [AmfibiController::class, 'update'])->name('update-amfibi')->middleware('auth');
Route::delete('/admin/amfibi/delete/{id}', [AmfibiController::class, 'delete'])->name('delete-amfibi')->middleware('auth');


Route::get('/darat', [DaratController::class, 'index'])->name('index-darat');

Route::get('/admin/darat', [DaratController::class, 'admin_darat'])->name('browse-darat')->middleware('auth');
Route::get('/admin/darat/create', [DaratController::class, 'create'])->name('create-darat')->middleware('auth');
Route::post('/admin/darat/store', [DaratController::class, 'store'])->name('store-darat')->middleware('auth');
Route::get('/admin/darat/edit/{id}', [DaratController::class, 'edit'])->name('edit-darat')->middleware('auth');
Route::put('/admin/darat/update/{id}', [DaratController::class, 'update'])->name('update-darat')->middleware('auth');
Route::delete('/admin/darat/delete/{id}', [DaratController::class, 'delete'])->name('delete-darat')->middleware('auth');


Route::get('/air', [AirController::class, 'index'])->name('index-air');

Route::get('/admin/air', [AirController::class, 'admin_air'])->name('browse-air')->middleware('auth');
Route::get('/admin/air/create', [AirController::class, 'create'])->name('create-air')->middleware('auth');
Route::post('/admin/air/store', [AirController::class, 'store'])->name('store-air')->middleware('auth');
Route::get('/admin/air/edit/{id}', [AirController::class, 'edit'])->name('edit-air')->middleware('auth');
Route::put('/admin/air/update/{id}', [AirController::class, 'update'])->name('update-air')->middleware('auth');
Route::delete('/admin/air/delete/{id}', [AirController::class, 'delete'])->name('delete-air')->middleware('auth');


Route::get('/kandang', [KandangController::class, 'index'])->name('index-kandang');

Route::get('/admin/kandang', [KandangController::class, 'admin_kandang'])->name('browse-kandang')->middleware('auth');
Route::get('/admin/kandang/create', [KandangController::class, 'create'])->name('create-kandang')->middleware('auth');
Route::post('/admin/kandang/store', [KandangController::class, 'store'])->name('store-kandang')->middleware('auth');
Route::get('/admin/kandang/edit/{id}', [KandangController::class, 'edit'])->name('edit-kandang')->middleware('auth');
Route::put('/admin/kandang/update/{id}', [KandangController::class, 'update'])->name('update-kandang')->middleware('auth');
Route::delete('/admin/kandang/delete/{id}', [KandangController::class, 'delete'])->name('delete-kandang')->middleware('auth');


Route::get('/kesehatan', [KesehatanController::class, 'index'])->name('index-kesehatan');

Route::get('/admin/kesehatan', [KesehatanController::class, 'admin_kesehatan'])->name('browse-kesehatan')->middleware('auth');
Route::get('/admin/kesehatan/create', [KesehatanController::class, 'create'])->name('create-kesehatan')->middleware('auth');
Route::post('/admin/kesehatan/store', [KesehatanController::class, 'store'])->name('store-kesehatan')->middleware('auth');
Route::get('/admin/kesehatan/edit/{id}', [KesehatanController::class, 'edit'])->name('edit-kesehatan')->middleware('auth');
Route::put('/admin/kesehatan/update/{id}', [KesehatanController::class, 'update'])->name('update-kesehatan')->middleware('auth');
Route::delete('/admin/kesehatan/delete/{id}', [KesehatanController::class, 'delete'])->name('delete-kesehatan')->middleware('auth');


Route::get('/makanan', [MakananController::class, 'index'])->name('index-makanan');

Route::get('/admin/makanan', [MakananController::class, 'admin_makanan'])->name('browse-makanan')->middleware('auth');
Route::get('/admin/makanan/create', [MakananController::class, 'create'])->name('create-makanan')->middleware('auth');
Route::post('/admin/makanan/store', [MakananController::class, 'store'])->name('store-makanan')->middleware('auth');
Route::get('/admin/makanan/edit/{id}', [MakananController::class, 'edit'])->name('edit-makanan')->middleware('auth');
Route::put('/admin/makanan/update/{id}', [MakananController::class, 'update'])->name('update-makanan')->middleware('auth');
Route::delete('/admin/makanan/delete/{id}', [MakananController::class, 'delete'])->name('delete-makanan')->middleware('auth');