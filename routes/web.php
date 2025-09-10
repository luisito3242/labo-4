<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (): View {
    return view('welcome');
});

use App\Http\Controllers\SaludoController;

Route::get('/saludo', [SaludoController::class, 'index']);

use App\Http\Controllers\SaludoLuisController;

Route::get('/saludo-Luis', [SaludoLuisController::class, 'index']);