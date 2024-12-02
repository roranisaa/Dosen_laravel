<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/lecturer', [UserController::class, 'getLecturers']);