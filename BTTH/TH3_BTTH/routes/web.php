<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SaleController;


Route::get('/', function () {
    return view('index');
});

Route::get("/medicines", MedicineController::class . "@index")
    -> name("medicines.index");

Route::get("/sales", SaleController::class . "@index")
    -> name("sales.index");

Route::get("/students", StudentController::class . "@index")
    -> name("students.index");

Route::get("/classes", ClassController::class . "@index")
    -> name("classes.index");

Route::get("/computers", ComputerController::class . "@index")
    -> name("computers.index");

Route::get("/issues", IssueController::class . "@index")
    -> name("issues.index");
