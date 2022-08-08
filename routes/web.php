<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//----------controller------
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\MonthlyAttendance;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\LeaveController;

use App\Http\Controllers\UserController;

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

//----normal routing without controller------> 
// Route::get('/', function () {
//     return view('include.login');
// });
    
// Route::get('/home', function () {
//     return view('dd');
// });


//----normal routing use controller------> 
Route::get('/', [LoginController::class, 'index']);
Route::get('home', [HomeController::class,'index']);       // 'home'=url , 'index'=controller function
// Route::post('login', [LoginController::class, 'login']);
// Route::get('logout', [LoginController::class, 'logout']);

Route::get('monthly', [MonthlyAttendance::class,'index']);

//----Resource Routing------>
Route::resource('departments', DepartmentController::class);
Route::resource('divisions', DivisionController::class);
Route::resource('positions', PositionController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('leavetypes', LeaveTypeController::class);
Route::resource('leaves', LeaveController::class);

Route::resource('users', UserController::class);
