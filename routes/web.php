<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "Terminated by Developer";
    return view('index');
})->name('index');

Route::get('/blog', function () {
    return "Terminated by Developer";
    return view('blog');
})->name('blog');

Route::get('/blog/detail', function () {
    return "Terminated by Developer";
    return view('blog-detail');
})->name('blog.detail');

Route::get('/case/studies', function () {
    return "Terminated by Developer";
    return view('case');
})->name('case');

Route::get('/contact', function () {
    return "Terminated by Developer";
    return view('contact');
})->name('contact');
