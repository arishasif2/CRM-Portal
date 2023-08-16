<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlankController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\FontawesomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;

Route::get('/', [IndexController::class,'show'])->name('index');
Route::get('/dashboard', [DashboardController::class,'show'])->name('dashboard');
Route::get('/blank', [BlankController::class,'show'])->name('blank');
Route::get('/404', [ErrorController::class,'show'])->name('404');
Route::get('/map-google', [MapController::class,'show'])->name('map');
Route::get('/fontawesome', [FontawesomeController::class,'show'])->name('fontawesome');
Route::get('/profile', [ProfileController::class,'show'])->name('profile');

// Client Section
Route::get('/client',[ClientController::class,'show'])->name('client');

Route::get('/create',[ClientController::class,'index'])->name('create');
Route::post('/create', [ClientController::class,'create'])->name('create');

Route::get('edit/{id}', [ClientController::class,'edit'])->name('edit');
Route::put('edit/{id}', [ClientController::class,'update'])->name('update');

Route::get('delete/{id}', [ClientController::class,'destroy'])->name('delete');


// Project Section
Route::get('/project', [ProjectController::class,'show'])->name('project');

Route::get('/project/createp',[ProjectController::class,'create'])->name('createp');
Route::post('/project', [ProjectController::class,'store'])->name('createpro');

Route::get('editp/{id}', [ProjectController::class,'edit'])->name('editp');
Route::put('editp/{id}', [ProjectController::class,'update'])->name('updatep');

Route::get('deletep/{id}', [ProjectController::class,'destroy'])->name('deletep');
