<?php

use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/employees', function () {
    return new EmployeeCollection(Employee::paginate(2));
})->middleware('auth:api');

Route::middleware('auth:api')->group(function () {
    Route::get('/employee/{id}', function (string $id) {
        return new EmployeeResource(Employee::findOrFail($id));
    });

    Route::post('posts',  function () {return ["status"=>"ok"];});
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
