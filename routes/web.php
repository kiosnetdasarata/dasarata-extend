<?php

use App\Models\Cable;
use App\Models\Modem;
use App\Models\Employee;
use App\Models\ModemOut;

use App\Models\ServicePackage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CableController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ModemController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobTitleController;
use App\Http\Controllers\ModemTypeController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\PoleController;
use App\Http\Controllers\ServicePackageController;
use App\Http\Controllers\ProgramTypeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SellerController;

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
// route level
Route::resource('level', LevelController::class);

// route komisi
Route::resource('komisi', CommissionController::class);

// route user
Route::resource('user', UserController::class);

Route::prefix('warehouse')->name('warehouse.')->group(function(){
    Route::get('/', function(){
        return view('warehouse.index');
    })->name('warehouse');
    Route::resource('cable', CableController::class);
    Route::resource('seller', SellerController::class);
    Route::resource('modem-type', ModemTypeController::class);
    Route::resource('modem-list', ModemController::class);
    Route::resource('pole', PoleController::class);
    Route::get('/psb-modem', function () {
        return view('warehouse.psb-modem.index', [
            'datas' => ModemOut::all()
        ]);
    })->name('psb-modem');
});


Route::prefix('marketing')->name('marketing.')->group(function(){
    Route::get('/', function () {
        return view('marketing.index', [
            'sidebar' => 'marketing'
        ]);
    })->name('marketing');
    Route::resource('service-packages', ServicePackageController::class);
    Route::resource('promo-type', ProgramTypeController::class);
    Route::resource('promo-active', ProgramController::class);
});

Route::controller(EmployeeController::class)->group(function () {
    Route::get('fetch-regency', 'fetchRegency');
    Route::get('fetch-district', 'fetchDistrict');
    Route::get('fetch-village', 'fetchVillage');
});

Route::get('/login', function(){
    return view('login.index');
});

