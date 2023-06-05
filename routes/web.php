<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobTitleController;

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

Route::get('/', function () {
    return view('welcome');
});

//Route Group
// Route::middleware('')->group(function(){

    //Route Dashboard
    Route::get('/dashboard', function () {
        return view('hr.index');
    })->name('dashboard');

    //Route Employee
    // Route::get('/employees', function () {
    //     return view('hr.employee.index');
    // })->name('employees');

    // Route::get('/employees/input', function () {
    //     return view('hr.employee.create');
    // })->name('employees.create');

    //Route Division
    // Route::get('/division', function () {
    //     return view('hr.division.index');
    // })->name('division');

    // Route::get('/job-title', function (){
    //     return view('hr.job-title.index');
    // })->name('job-title');

// });

// resource Employees
Route::resource('employees', EmployeeController::class);


// resource Division
Route::resource('division', DivisionController::class);

// resource Job
Route::resource('job-title', JobTitleController::class);

//Level
Route::get('/hr/level', function(){
    return view('hr.level.index');
});
Route::get('/hr/level/update', function(){
    return view('hr.level.update');
});

//komisi
Route::get('/hr/komisi', function(){
    return view('hr.komisi.index');
});
