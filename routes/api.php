<?php

namespace App\Http\Controllers\Api;

use Framework\Support\Facades\Route;

Route::get('/api/ip-adresses', [IPAddressController::class, 'index']);