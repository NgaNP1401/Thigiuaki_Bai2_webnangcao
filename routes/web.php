<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HelloController;


Route::get('/abc', function () {
    return view('abc');
});

