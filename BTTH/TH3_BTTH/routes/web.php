<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
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

Route::get("/students", StudentController::class . "@index")
    -> name("students.index");

Route::get("/classes", ClassController::class . "@index")
    -> name("classes.index");
