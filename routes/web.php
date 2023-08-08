<?php

use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\PassresetPageController;
use App\Http\Controllers\SignupPageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/user-registration',[UserController::class, 'UserRegistration']);
