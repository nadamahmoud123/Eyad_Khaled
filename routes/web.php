<?php

use App\Http\Controllers\SubjectController;

use App\Http\Controllers\DoctorController;
use App\Models\subject;
use App\Models\Department;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

route::middleware('auth')->resource('subjects', SubjectController::class);

Auth::routes();

Route::resource('/departments', App\Http\controllers\DepartmentController::class);
Route::resource('/doctors', App\Http\controllers\DoctorController::class);
Route::resource('/students', App\Http\controllers\StudentController::class);

/* Route::post('/users', [DoctorController::class, 'store'])->name('users.store'); */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/Dochome', [App\Http\Controllers\HomeController::class, 'Dochome']);
Route::get('/StudentHome', [App\Http\Controllers\HomeController::class, 'StudentHome']);
