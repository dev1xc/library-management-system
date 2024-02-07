<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class UseBorrowBookController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware("auth");
  }
  public function index() {
    $data = Book::all();
    $dataCategory = Category::all();
    $dataPublisher = Publisher::all();
    return view("user.function.borrow-book.index",compact("data"));
  }
}
