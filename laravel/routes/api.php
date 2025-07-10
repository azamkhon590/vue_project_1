<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ContactController;

Route::prefix("/news")->group(function(){
    Route::get("/",[NewsController::class,"index"]);
});

Route::prefix("/category")->group(function(){
    Route::get("/",[CategoryController::class,"index"]);
});

Route::prefix("/contact")->group(function(){
    Route::get("/",[ContactController::class,"index"]);
});
