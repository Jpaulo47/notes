<?php

use App\Http\Controllers\MainControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World";
});

Route::get('/about', function () {
    return "About Page";
});

//ADD PARAMS
Route::get("/main/{value}", [MainControler::class, 'index']);