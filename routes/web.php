<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\TampilController;
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


Route::get('/masuk', function () {
    return view('form-pemasukan');
});

Route::get('/keluar', function () {
    return view('form-pengeluaran');
});


Route::get('/', [TampilController::class,"index"]);


Route::get('/tab-keluar', [PengeluaranController::class,"index"]);
Route::get('/tab-masuk', [PemasukanController::class,"index"]);
Route::get('/tab-masuk/delete/{id}', [PemasukanController::class,"destroy"]);
Route::get('/tab-keluar/delete/{id}', [PengeluaranController::class,"destroy"]);
Route::post('/pemasukan', [PemasukanController::class, "insert_pemasukan"]) ;
Route::post('/pengeluaran', [PengeluaranController::class, "insert_pengeluaran"]) ;
Route::post('/edit', [PemasukanController::class, "update"]) ;
Route::get('tab-masuk/edit/{id}', [PemasukanController::class, "edit"]);
Route::post('/edit-keluar', [PengeluaranController::class, "update"]) ;
Route::get('tab-keluar/edit/{id}', [PengeluaranController::class, "edit"]);
