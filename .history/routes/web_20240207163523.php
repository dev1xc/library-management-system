<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Auth;
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
// Route::get('/logout', function() {
//   Auth::
// });
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
  Route::get('profile', [ProfileController::class,'index']);
  Route::post('profile', [ProfileController::class,'edit']);
});
Route::prefix('admin')->group(function () {
  Route::get('user', [UserController::class,'index']);
  Route::get('add-user', [UserController::class,'add']);
  Route::post('add-user', [UserController::class,'create']);
  Route::get('edit-user/{id}', [UserController::class,'edit']);
  Route::post('edit-user/{id}', [UserController::class,'update']);
  Route::get('delete-user/{id}', [UserController::class,'delete']);
});
