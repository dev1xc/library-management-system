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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', function () {
  return view('admin.functions.dashboard');
});
Route::prefix('admin')->group(function () {
  Route::get('category', [CategoryController::class,'index']);
  Route::get('add-category', [CategoryController::class,'add']);
  Route::post('add-category', [CategoryController::class,'create']);
  Route::get('edit-category/{id}', [CategoryController::class,'edit']);
  Route::post('edit-category/{id}', [CategoryController::class,'update']);
  Route::get('delete-category/{id}', [CategoryController::class,'delete']);
});
Route::prefix('admin')->group(function () {
  Route::get('profile', [CategoryController::class,'index']);
});
