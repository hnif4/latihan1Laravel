<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersegiController;

Route::get('/hitung-persegi', [PersegiController::class, 'showForm']);
Route::post('/hitung-persegi', [PersegiController::class, 'hitung']);

use App\Http\Controllers\PersegiPanjangController;

Route::get('/hitung-persegi-panjang', [PersegiPanjangController::class, 'showForm']);
Route::post('/hitung-persegi-panjang', [PersegiPanjangController::class, 'hitung']);

use App\Http\Controllers\LingkaranController;

Route::get('/hitung-lingkaran', [LingkaranController::class, 'showForm']);
Route::post('/hitung-lingkaran', [LingkaranController::class, 'hitung']);

use App\Http\Controllers\SegitigaController;

Route::get('/hitung-segitiga', [SegitigaController::class, 'showForm']);
Route::post('/hitung-segitiga', [SegitigaController::class, 'hitung']);




Route::get('/', function () {
    return view('welcome');
});
