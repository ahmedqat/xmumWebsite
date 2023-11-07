<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Models\Department;
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
    return view('index',['departments' => Department::all()]);
});







//SideMenu Routes


//Department Views

// Route::get('/department/library',[DepartmentController::class,'library'])->name('department.library');

// Route::get('/department/IT',[DepartmentController::class,'it'])->name('department.it');

// Route::get('/department/admin',[DepartmentController::class,'admin'])->name('department.admin');

// Route::get('/department/finance',[DepartmentController::class,'finance'])->name('department.finance');

// Route::get('/department/research',[DepartmentController::class,'research'])->name('department.research');

// Route::get('/department/HR',[DepartmentController::class,'hr'])->name('department.hr');

// Route::get('/department/asset',[DepartmentController::class,'asset'])->name('department.asset');

// Route::get('/department/academic_affairs',[DepartmentController::class,'academic_affairs'])->name('department.aa');

// Route::get('/department/quality_assurance',[DepartmentController::class,'quality_assurance'])->name('department.qa');

Route::get('/departments/{department}',[DepartmentController::class,'deb'])->name('departments.department');



//Show Documents in Department

Route::get('/departments/{department}/documents',[DocumentController::class, 'show']) -> name('documents.show');


//Upload Documents

Route::post('/departments',[DocumentController::class,'upload']) ->name('documents.upload');
