<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('messages', [MessageController::class, 'index']);
Route::post('messages',[MessageController::class, 'store']);


Route::prefix('admin/books')
->name('book.')
->controller(BookController::class)
->group(function(){
    Route::get('', 'index')->name('index');
    Route::post('{id}', 'show')->whereNumber('id')->name('show');
    Route::get('/create', 'create')->name('create');
    Route::post('', 'store')->name('store');
});