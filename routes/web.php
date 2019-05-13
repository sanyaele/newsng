<?php

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

// Home Page
Route::get('/', function () {
    return view('home');
});

// About Us
Route::get('/about', function(){
    return view('about');
});

// Contact Us
Route::get('/contact', function(){
    return view('contact');
});

// Stories Resources
Route::resource('stories','StoryController');

// Celebrity Controller
Route::resource('stories','CelebrityController');