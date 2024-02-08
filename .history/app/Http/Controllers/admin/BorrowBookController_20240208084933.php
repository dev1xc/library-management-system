<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BorrowDetail;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowBookController extends Controller
{
  //
  public function index()
  {
    $dataS = BorrowDetail::paginate(5);
    $dataUser = User::all();
    $dataBook = Book::all();
    $data = [];
    foreach ($dataS as $key => $value) {
      $data[$value['id']] = $value->toArray();
    }
    return view("admin.functions.borrow.index", compact("dataS","dataUser"));
  }
}
