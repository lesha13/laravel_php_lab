<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;
use App\Http\Controllers\EmployeeController;
use \App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'employees');

Route::get('/Miliuchenko/cv', [CVController::class, 'cv']);
Route::get('departments/{id}', [DepartmentController::class, 'show']);

Route::resource('employees', EmployeeController::class);
