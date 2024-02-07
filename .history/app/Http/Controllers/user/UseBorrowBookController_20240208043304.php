<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Book;
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
    return view("");
  }
}
