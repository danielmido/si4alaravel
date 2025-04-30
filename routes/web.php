<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('profil', function() {
    return view('profil');
});

Route::get('profil', function() {
    return view('profil');
});

Route::resource('/fakultas', FakultasController::class);