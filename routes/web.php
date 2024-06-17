<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Todos;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/todos', Todos::class);
