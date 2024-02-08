<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BorrowDetail;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowBookController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware("auth");
  }
  public function index()
  {
    $dataS = BorrowDetail::orderBy("id", "desc")->paginate(5);
    $dataUser = User::all();
    $dataBook = Book::all();
    $data = [];
    foreach ($dataS as $key => $value) {
      $data[$value['id']] = $value->toArray();
    }
    return view("admin.functions.borrow.index", compact("dataS", "dataUser", "dataBook"));
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
      return view('admin.functions.borrow.detail', compact('data', 'data1', 'data2', 'dataBorrow'));
    }
  }
  public function confirm($id)
  {
    BorrowDetail::where('id', $id)->update(['status' => 1]);
    return back()->with('success', 'Confirm Success');
  }
}
