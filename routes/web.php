<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\FoodProductController;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// --ROUTE PENGUNJUNG--
Route::get('/', function(){
    return view('welcome');
});

// --ROUTE DASHBOARD--
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('admin/mitra', MitraController::class)->middleware('auth')->names('mitra');
Route::resource('admin/categories', CategoriesController::class)->middleware('auth')->names('categories');
// Route::get('/mami', function(){
//     return view('admin.mami.index');
// });
Route::resource('admin/mami', FoodProductController::class)->middleware('auth')->names('mami');