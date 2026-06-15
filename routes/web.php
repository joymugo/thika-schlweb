<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/academics', function () {
    return view('pages.academics');
})->name('academics');

Route::get('/admissions', function () {
    return view('pages.admissions');
})->name('admissions');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/news', function () {
    return view('pages.news');
})->name('news');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
