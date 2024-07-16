<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/projects', function () {
    return view ('projects');
})->name('projects');

Route::get('/resume', function() {
    return view('resume');
})->name('resume');

//Route::get('/userscape', function () {
//    return view('userscape');
//})->name('userscape');
