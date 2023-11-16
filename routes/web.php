<?php

use App\Http\Controllers\PingPongControleur;
use App\Http\Controllers\TodoControleur;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping', [PingPongControleur::class, 'ping']);
Route::get('/pong', [PingPongControleur::class, 'pong']);

Route::get('/todo',[TodoControleur::class,'listTodo']);
