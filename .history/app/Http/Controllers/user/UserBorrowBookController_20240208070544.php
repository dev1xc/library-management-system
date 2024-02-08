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
  public function index()
  {
    $dataBook = Book::paginate(9);
    $dataCategory = Category::all();
    $dataPublisher = Publisher::all();
    $dataLanguage = BookLanguage::all();
    return view("user.function.borrow-book.index", compact("dataBook", "dataCategory", "dataPublisher", "dataLanguage"));
  }
  public function detail($id)
  {
    $data = Book::findOrFail($id);
    $dataCategory = Category::all();
    $dataPublisher = Publisher::all();
    $dataLanguage = BookLanguage::all();
    return view("user.function.borrow-book.detail-book", compact("data", "dataCategory", "dataPublisher", "dataLanguage"));
  }
  public function borrow($id)
  {
    $book = Book::findOrFail($id);
    $id_book = $id;
    $id_user = Auth::user()->id;
    $data = session()->get('borrow-detail', []);
      if(count($data) < 2 ) {
        if (isset($data[$id])) {
          return back()->with('error', 'You have chose more than 1 book');
        } else {
          $data[$id] = [
            'id_book' => $id_book,
            'book_name' => $book['name'],
            'book_image' => $book['image'],
            'book_price'=> $book['name'],
            'id_user' => $id_user
          ];
        }
      }else {
        return back()->with('error','You have 2 books');
      }
    session()->put("borrow-detail", $data);
    return back()->with("success", "Borrow Success");
  }
  public function borrowDetail()
  {
    return view("user.function.borrow-book.borrow-detail");
  }
  public function deleteBook($id) {
    $data = session()->get('borrow-detail', []);
    unset($data[$id]);
  }
}
