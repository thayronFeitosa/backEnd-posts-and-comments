<?php

use Illuminate\Support\Facades\Route;


Route::get('teste', function () {
    return '/';
})->middleware('auth');
