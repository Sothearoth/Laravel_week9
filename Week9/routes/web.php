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
    return view('Welcome');
});

Route::get('/aboutUs', function () {
    return view('layout.aboutUs');
});
Route::get('/app', function () {
    return view('layout.app');
});
Route::get('/team', function () {
    return view('layout.team');
});
Route::get('/testimonials', function () {
    return view('layout.testimonials');
});
Route::get('/services', function () {
    return view('layout.services');
});
Route::get('/portfolio', function () {
    return view('layout.portfolio');
});
Route::get('/pricing', function () {
    return view('layout.pricing');
});
Route::get('/blog', function () {
    return view('layout.blog');
});
Route::get('/blog-single', function () {
    return view('layout.blog-single');
});


