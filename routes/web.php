<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/management', function () {
    return view('pages.management');
})->name('management');

Route::get('/school',function(){
    return view('pages.school');
})->name('school');


Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
