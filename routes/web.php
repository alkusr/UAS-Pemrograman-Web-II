<?php

use App\Http\Controllers\AmfibiController;
use App\Http\Controllers\AirController;
use App\Http\Controllers\DaratController;
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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/amfibi', [AmfibiController::class, 'index'])->name('index-amfibi');

Route::get('/admin/amfibi', [AmfibiController::class, 'admin_amfibi'])->name('browse-amfibi');
Route::get('/admin/amfibi/create', [AmfibiController::class, 'create'])->name('create-amfibi');
Route::post('/admin/amfibi/store', [AmfibiController::class, 'store'])->name('store-amfibi');
Route::get('/admin/amfibi/edit/{id}', [AmfibiController::class, 'edit'])->name('edit-amfibi');
Route::put('/admin/amfibi/update/{id}', [AmfibiController::class, 'update'])->name('update-amfibi');
Route::delete('/admin/amfibi/delete/{id}', [AmfibiController::class, 'delete'])->name('delete-amfibi');


Route::get('/darat', [DaratController::class, 'index'])->name('index-darat');

Route::get('/admin/darat', [DaratController::class, 'admin_darat'])->name('browse-darat');
Route::get('/admin/darat/create', [DaratController::class, 'create'])->name('create-darat');
Route::post('/admin/darat/store', [DaratController::class, 'store'])->name('store-darat');
Route::get('/admin/darat/edit/{id}', [DaratController::class, 'edit'])->name('edit-darat');
Route::put('/admin/darat/update/{id}', [DaratController::class, 'update'])->name('update-darat');
Route::delete('/admin/darat/delete/{id}', [DaratController::class, 'delete'])->name('delete-darat');


Route::get('/air', [AirController::class, 'index'])->name('index-air');

Route::get('/admin/air', [AirController::class, 'admin_air'])->name('browse-air');
Route::get('/admin/air/create', [AirController::class, 'create'])->name('create-air');
Route::post('/admin/air/store', [AirController::class, 'store'])->name('store-air');
Route::get('/admin/air/edit/{id}', [AirController::class, 'edit'])->name('edit-air');
Route::put('/admin/air/update/{id}', [AirController::class, 'update'])->name('update-air');
Route::delete('/admin/air/delete/{id}', [AirController::class, 'delete'])->name('delete-air');