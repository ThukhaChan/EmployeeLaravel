<?php

use App\Http\Controllers\EmployeeController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/employee',[EmployeeController::class,'index'])->name('employee.index')->middleware('auth');
Route::post('/',[EmployeeController::class,'store'])->name('employee.store')->middleware('auth');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create')->middleware('auth');
Route::get('/employee/show/{employee}',[EmployeeController::class,'show'])->name('employee.show')->middleware('auth');
Route::put('/employee/update/{employee}',[EmployeeController::class,'update'])->name('employee.update')->middleware('auth');
Route::get('/employee/edit/{employee}',[EmployeeController::class,'edit'])->name('employee.edit')->middleware('auth');
Route::delete('/employee/destroy/{employee}',[EmployeeController::class,'destroy'])->name('employee.destroy')->middleware('auth');
//Route::resource('employee',EmployeeController::class);
