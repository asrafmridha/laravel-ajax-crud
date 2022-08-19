<?php

use App\Http\Controllers\backend\EmployeeController;
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
    return view('addemployeeview');
});


//route for addemployee view
Route::get('addemployeeview',[EmployeeController::class,'index'])->name('addemployee');

// Route For add employee with ajax           
Route::post("addemployee",[EmployeeController::class,"store"]);

// Route for show employee with ajax 

Route::get("showemployee",[EmployeeController::class,"show"]);


//Route for deleteemployee

Route::get("deleteemployee/{id}",[EmployeeController::class,"destroy"]);

//Route for show update data in modal

Route::get("updatemodalshow/{id}",[EmployeeController::class,"edit"]);

//Route for  update data

Route::post("updatedata/{id}",[EmployeeController::class,"update"]);

// Route for Data Search 
Route::get("search",[EmployeeController::class,"search"]);

