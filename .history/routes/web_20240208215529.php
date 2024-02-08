<?php

use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\BookLanguageController;
use App\Http\Controllers\admin\BorrowBookController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\PublisherController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\user\UserBorrowBookController;
use App\Http\Controllers\user\UserProfileController;
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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::middleware('admin')->get('/admin/home', function () {
  return view('admin.functions.dashboard');
});
Route::middleware('admin')->get('/admin/dashboard', function () {
  return view('admin.functions.dashboard');
});
Route::group(['prefix'=>'admin','middleware' => ['admin']], function () {
  Route::get('category', [CategoryController::class, 'index']);
  Route::get('add-category', [CategoryController::class, 'add']);
  Route::post('add-category', [CategoryController::class, 'create']);
  Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
  Route::post('edit-category/{id}', [CategoryController::class, 'update']);
  Route::get('delete-category/{id}', [CategoryController::class, 'delete']);
});
Route::group(['prefix'=>'admin','middleware' => ['admin']],function () {
  Route::get('profile', [ProfileController::class, 'index']);
  Route::post('profile', [ProfileController::class, 'edit']);
});
Route::group(['prefix'=>'admin','middleware' => ['admin']],function () {
  Route::get('user', [UserController::class, 'index']);
  Route::get('add-user', [UserController::class, 'add']);
  Route::post('add-user', [UserController::class, 'create']);
  Route::get('edit-user/{id}', [UserController::class, 'edit']);
  Route::post('edit-user/{id}', [UserController::class, 'update']);
  Route::get('delete-user/{id}', [UserController::class, 'delete']);
});
Route::group(['prefix'=>'admin','middleware' => ['admin']],function () {
  Route::get('book', [BookController::class, 'index']);
  Route::get('add-book', [BookController::class, 'add']);
  Route::post('add-book', [BookController::class, 'create']);
  Route::get('edit-book/{id}', [BookController::class, 'edit']);
  Route::post('edit-book/{id}', [BookController::class, 'update']);
  Route::get('delete-book/{id}', [BookController::class, 'delete']);
});
Route::group(['prefix'=>'admin','middleware' => ['admin']],function () {
  Route::get('publisher', [PublisherController::class, 'index']);
  Route::get('add-publisher', [PublisherController::class, 'add']);
  Route::post('add-publisher', [PublisherController::class, 'create']);
  Route::get('edit-publisher/{id}', [PublisherController::class, 'edit']);
  Route::post('edit-publisher/{id}', [PublisherController::class, 'update']);
  Route::get('delete-publisher/{id}', [PublisherController::class, 'delete']);
});
Route::group(['prefix'=>'admin','middleware' => ['admin']],function () {
  Route::get('book-language', [BookLanguageController::class, 'index']);
  Route::get('add-book-language', [BookLanguageController::class, 'add']);
  Route::post('add-book-language', [BookLanguageController::class, 'create']);
  Route::get('edit-book-language/{id}', [BookLanguageController::class, 'edit']);
  Route::post('edit-book-language/{id}', [BookLanguageController::class, 'update']);
  Route::get('delete-book-language/{id}', [BookLanguageController::class, 'delete']);
});
Route::group(['prefix'=>'admin','middleware' => ['admin']],function () {
  Route::get('borrow-book', [BorrowBookController::class, 'index']);
  Route::get('borrow-detail/{id}', [BorrowBookController::class, 'getDetail']);
  Route::get('borrow-confirm/{id}', [BorrowBookController::class, 'confirm']);
});

//USER
Route::middleware('user')->get('/user/home', function () {
  return view('user.function.dashboard');
});
Route::middleware('user')->get('/user/dashboard', function () {
  return view('user.function.dashboard');
});
Route::group(['prefix'=>'user','middleware' => ['user']],function () {
  Route::get('profile', [UserProfileController::class, 'index']);
  Route::post('profile', [UserProfileController::class, 'edit']);
});
Route::group(['prefix'=>'user','middleware' => ['user']],function () {
  Route::get('list-book', [UserBorrowBookController::class, 'index']);
  Route::get('book/{id}',[UserBorrowBookController::class,'detail']);
  Route::get('borrow-book/{id}', [UserBorrowBookController::class, 'borrow']);
  Route::get('borrow-detail', [UserBorrowBookController::class, 'borrowDetail']);
  Route::get('delete-book/{id}', [UserBorrowBookController::class, 'deleteBook']);
  Route::get('borrow-book', [UserBorrowBookController::class, 'borrowAll']);
  Route::get('history', [UserBorrowBookController::class, 'history']);
  Route::get('history-detail/{id}', [UserBorrowBookController::class, 'getDetail']);
});
