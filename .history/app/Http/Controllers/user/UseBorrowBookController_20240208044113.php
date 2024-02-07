<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookLanguage;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class UseBorrowBookController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware("auth");
  }
  public function index() {
    $datas = Book::all();
    $dataCategory = Category::all();
    $dataPublisher = Publisher::all();
    $dataLanguage = BookLanguage::all();
    return view("user.function.borrow-book.index",compact("datas","dataCategory","dataPublisher","dataLanguage"));
  }
}
