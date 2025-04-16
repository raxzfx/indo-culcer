<?php

use  App\Http\Controllers\FolkloreController;


Route::get('/login', function () {
    return view('login');
});

Route::get('/folklore', function () {
    return view('folklore');
});


Route::get('/art', function () {
    return view('art');
});
Route::get('/tradision', function () {
    return view('tradision');
});

Route::get('/folklore', [FolkloreController::class, 'index']);
