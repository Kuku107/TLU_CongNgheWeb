<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SaleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/medicines", MedicineController::class . "@index")
    -> name("medicines.index");

Route::get("/sales", SaleController::class . "@index")
    -> name("sales.index");