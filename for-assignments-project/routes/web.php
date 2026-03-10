<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class, 'index'])->middleware('check.status');

Route::get('/', function () {
    return view('welcome');
});
