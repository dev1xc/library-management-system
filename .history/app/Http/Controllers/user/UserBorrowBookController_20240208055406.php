<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookLanguage;
use App\Models\BorrowDetail;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBorrowBookController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware("auth");
  }
  public function index() {
    $dataBook = Book::paginate(9);
    $dataCategory = Category::all();
    $dataPublisher = Publisher::all();
    $dataLanguage = BookLanguage::all();
    return view("user.function.borrow-book.index",compact("dataBook","dataCategory","dataPublisher","dataLanguage"));
  }
  public function detail($id) {
    $data = Book::findOrFail($id);
    $dataCategory = Category::all();
    $dataPublisher = Publisher::all();
    $dataLanguage = BookLanguage::all();
    return view("user.function.borrow-book.detail-book", compact("data", "dataCategory", "dataPublisher","dataLanguage"));
  }
  public function borrow($id) {
    $id_book = $id;
    $id_user = Auth::user()->id;
    BorrowDetail::update($data);
    return back();
  }
}
