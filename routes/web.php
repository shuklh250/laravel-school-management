<?php

use App\Http\Controllers\AcadamicYearController;
use App\Http\Controllers\ClassesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'admin.guest'], function () {
     
        Route::get('login', [AdminController::class, 'index'])->name('admin.login');
                
        Route::post('login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
        Route::get('register', [AdminController::class, 'register'])->name('admin.register');

    });
    Route::group(['middleware'=>'admin.auth'], function(){

        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('form', [AdminController::class, 'form'])->name('admin.form');
        Route::get('table', [AdminController::class, 'table'])->name('admin.table');
        // Acadamic year 
        Route::get('acadamic-year/create',[AcadamicYearController::class,'index'])->name('acadamic-year.create');
        Route::post('acadamic-year/store', [AcadamicYearController::class,'store'])->name('acadamic-year.store');
        Route::get('acadamic-year/read',[AcadamicYearController::class ,'read'])->name('acadamic-year.view');
        Route::get('acadamic-year/delete/{id}',[AcadamicYearController::class,'delete'])->name('acadamic-year.delete');    
        Route::get('acadamic-year/edit/{id}',[AcadamicYearController::class ,'edit'])->name('acadamic-year.edit'); 
        Route::post('acadamic-year/update', [AcadamicYearController::class ,'update'])->name('acadamic-year.update');
        // Acadamic classes here 

        Route::get('class/create',[ClassesController::class,'index'])->name('class.create');
        Route::post('class/store',[ClassesController::class,'store'])->name('class.store');
        Route::get('class/read', [ClassesController::class,'read'])->name('class.read');
        Route::get('class/edit/{id}',[ClassesController::class,'edit'])->name('class.edit');
        Route::post('class/update',[ClassesController::class,'update'])->name('class.update');
        Route::get('class/delete/{id}',[ClassesController::class,'delete'])->name('class.delete');

    });
});









