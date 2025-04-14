<?php

use App\Http\Controllers\CeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('detail-cerita/{id}', [CeritaController::class, 'detailCerita'])->name('detail-cerita');
