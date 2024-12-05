<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home', ['message' => 'Welcome to Employee Management System']);
});

//create a dynamic route for /employee/{name
Route::get('/employee/{name}', function ($name) {
    return "Hello, $name. Welcome to the Employee Management System!";
});

//Create controller and view 3A
Route::get('/employees', [EmployeeController::class, 'index']);

//Add New Employee Form 4A
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::post('/employees', [EmployeeController::class, 'store']);

//Detail view 5A
Route::get('/employee/{id}/details', [EmployeeController::class, 'show']);




