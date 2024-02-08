<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BorrowDetail;
use Illuminate\Http\Request;

class BorrowBookController extends Controller
{
  //
  public function index()
  {
    $dataS = BorrowDetail::all();

    foreach ($dataS as $key => $value) {

    }
    return view("admin.functions.borrow.index", compact("data"));
  }
}
