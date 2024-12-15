<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function() {
    return view('teste'); //funcionando
});

Route::get('/teste/controller', [UserController::class, 'teste']); //funcionando tambem

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
