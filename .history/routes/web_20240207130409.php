<?php

use App\Http\Controllers\admin\CategoryController;
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
    return view('welcome');
});
Route::get('/admin/home', function () {
  return view('admin.functions.dashboard');
});
Route::get('/admin/category', [CategoryController::class,'index']);
Route::get('/admin/add-category', [CategoryController::class,'add']);
Route::post('/admin/add-category', [CategoryController::class,'create']);
Route::get('/admin/edit-category', [CategoryController::class,'edit']);
Route::post('/admin/edit-category', [CategoryController::class,'update']);
