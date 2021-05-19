<?php

use App\Http\Controllers\App\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('{any?}', [HomeController::class, 'index'])
    ->where('any', '^(?!api).*$')
    ->name('home.index');
