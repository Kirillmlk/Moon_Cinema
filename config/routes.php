<?php

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Kernel\router\Route;

return [
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/movies', [MovieController::class, 'index']),
];