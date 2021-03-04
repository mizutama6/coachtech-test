<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/building', [TestController::class, 'test1']);
Route::get('/building/{room}', [TestController::class, 'test2']);