<?php

use App\Http\Controllers\BcountController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\KidatoController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StreamController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VisitorController;
use App\Models\Category;
use App\Models\Stream;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::middleware('auth')->group(function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('stream', StreamController::class);
    Route::resource('class', KidatoController::class);
    Route::resource('student', StudentController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('book', BookController::class);
    Route::resource('bcount', BcountController::class);
    Route::resource('department', DepartmentController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('visitor', VisitorController::class);
    Route::resource('purpose', PurposeController::class);
    Route::resource('hostel', HostelController::class);
    Route::resource('school', SchoolController::class);
    Route::resource('vehicle', VehicleController::class);
    Route::resource('expense', ExpenseController::class);
    Route::resource('exam', ExamController::class);
    Route::resource('term', TermController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
    