<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[\App\Http\Controllers\InicioController::class,'inicio']);


Route::get('company',[\App\Http\Controllers\CompanyController::class,'index']);
Route::get('company/create',[\App\Http\Controllers\CompanyController::class,'create']);
Route::post('company',[\App\Http\Controllers\CompanyController::class,'store']);
Route::get('company/{id}',[\App\Http\Controllers\CompanyController::class,'show']);
Route::delete('company/{id}',[\App\Http\Controllers\CompanyController::class,'destroy']);
Route::get('company/edit/{id}',[\App\Http\Controllers\CompanyController::class,'edit']);
Route::put('company/{id}',[\App\Http\Controllers\CompanyController::class,'update']);

Route::get('employee',[\App\Http\Controllers\EmployeeController::class,'index']);
Route::get('employee/create',[\App\Http\Controllers\EmployeeController::class,'create']);
Route::post('employee',[\App\Http\Controllers\EmployeeController::class,'store']);
Route::get('employee/edit/{id}',[\App\Http\Controllers\EmployeeController::class,'edit']);
Route::put('employee/{id}',[\App\Http\Controllers\EmployeeController::class,'update']);
Route::get('employee/{id}',[\App\Http\Controllers\EmployeeController::class,'show']);
Route::delete('employee/{id}',[\App\Http\Controllers\EmployeeController::class,'destroy']);

