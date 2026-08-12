<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/style-guide', 'style-guide')->name('style-guide');
