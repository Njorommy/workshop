<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('awal/masuk', function () {
    return view('masuk');
});
Route::get('awal', function () {
    return view('awal');
});
Route::get('awal/daftar', function () {
    return view('daftar');
});
