<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/team', function () {
    return view('team');
})->name('team');
Route::get('/publications', function () {
    return view('publications');
})->name('publications');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
