<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/", [HomeController::class, "index"]);
Route::get("posts", [PostController::class, "index"]);
