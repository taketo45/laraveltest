<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('messages', [MessageController::class, 'index']);
Route::post('messages',[MessageController::class, 'store']);