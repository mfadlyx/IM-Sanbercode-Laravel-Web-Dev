<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CastController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);

Route::get('/form', [DashboardController::class, 'form']);

Route::post('/welcome', [DashboardController::class, 'welcome']);

Route::get('/data-table',  function(){
    return view('data-table');
});

Route::get('/table', function(){
    return view('table');
});

//CRUD cast
// Tambah Cast (C=> Create Data)

//Untuk mengarah ke form tambah cast
Route::get('/cast/create', [CastController::class, 'create']);

//untuk memasukan input ke database
Route::post('/cast', [CastController::class, 'store']);

//Read Cast (R=> Read Data)
//Untuk menampilkan semua kategory
Route::get('/cast', [CastController::class, 'index']);

//untuk menampilkan detail Bio berdasarkan id
Route::get('/cast/{id}', [CastController::class, 'show']);

//Update Cast  (U => Update Data)
//Mengarahkan ke form edit cast berdasarkan id
Route::get('/cast/{id}/edit', [CastController::class, 'edit']);
//Fungsi update data berdasarkan id
Route::put('/cast/{id}', [CastController::class, 'update']);

//Delete Cast  (D => Delete Data)
//Menghapus berdasarkan parameter id
Route::delete('/cast/{id}', [CastController::class, 'destroy']);
