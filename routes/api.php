<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClientApiController;



Route::name('api.')
    ->apiResource('clients', ClientApiController::class);

