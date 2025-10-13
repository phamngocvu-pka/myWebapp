<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
})->name('home');
Route::get('/About', function () {
    return view('About');
});
Route::get('User/{name?}', function (?string $name='Pham ngoc vu') {
    return "Name:{$name}";
});