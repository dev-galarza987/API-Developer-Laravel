<?php

use App\Http\Controllers\DeveloperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', [DeveloperController::class, 'index']);
