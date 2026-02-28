<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');
Route::view('/services', 'pages.services.index');
Route::view('/blog/insights', 'pages.blog.insights');
Route::view('/contact', 'pages.contact.index');
