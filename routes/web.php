<?php

namespace App\Http\Controllers\Web;

use Framework\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);