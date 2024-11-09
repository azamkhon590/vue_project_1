<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\CategoryController;

Route::prefix("/news")->group(function(){
    Route::get("/",[NewsController::class,"index"]);
});

Route::prefix("/category")->group(function(){
    Route::get("/",[CategoryController::class,"index"]);
});
