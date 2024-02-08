<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookLanguage;
use App\Models\BorrowDetail;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\User;
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
    session()->put("borrow-detail", $data);
    return back()->with("success", " Delete Success");
  }
  public function borrowAll() {
    $data = session()->get('borrow-detail', []);
    $data_save = json_encode($data);
    $arrayId = [];
    foreach ($data as $d) {
      array_push($arrayId, $d['id_book']);
    }
    sort($arrayId);
    $stringId = implode('|', $arrayId);
    BorrowDetail::create([
      'id_book'=> $stringId,
      'id_user'=> Auth::user()->id,
    ]);
    session()->forget('borrow-detail');
    return back()->with('success','Information has send to Admin');
  }
  public function history() {
    $dataS = BorrowDetail::where('id_user', Auth::user()->id)->orderBy("id", "desc")->paginate(5);
    $dataUser = User::all();
    $dataBook = Book::all();
    $data = [];
    foreach ($dataS as $key => $value) {
      $data[$value['id']] = $value->toArray();
    }
    return view("user.function.borrow-book.history", compact("dataS", "dataUser", "dataBook"));
  }
  public function getDetail($id)
  {
    $dataBorrow = BorrowDetail::findOrFail($id);
    $ids = explode('|', $dataBorrow['id_book']);
    if (count($ids) == 2) {
      $data1 = Book::where('id', $ids[0])->first();
      $data2 = Book::where('id', $ids[1])->first();
      $data = [
        $data1,
        $data2
      ];
      return view('user.functions.borrow.detail', compact('data', 'data1', 'data2', 'dataBorrow'));
    }else{
      $data1 = Book::where('id', $ids[0])->first();
      $data = [
        $data1,
      ];
      return view('user.function.borrow-book.history-detail', compact('data', 'data1', 'dataBorrow'));
    }
  }
}
