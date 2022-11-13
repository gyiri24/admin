<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TicketController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/ratings', RatingController::class);
Route::get('/ratings/service/{service}', [RatingController::class, 'getServiceRating']);

Route::get('/employees',[EmployeeController::class, 'index']);
Route::get('/employees/statistics',[EmployeeController::class, 'getEmployeeWorkingHourskByTimeUnit']);
Route::get('/employees/{user}/services', [EmployeeController::class, 'getEmployeeServices']);
Route::apiResource('/services', ServiceController::class);
Route::apiResource('/roles', RoleController::class);
