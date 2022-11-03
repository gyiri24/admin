<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HistoryController;
use App\Models\Employee;
use App\Models\History;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('/employees', EmployeeController::class)->middleware('auth');
Route::resource('/history', HistoryController::class)->middleware('auth');
