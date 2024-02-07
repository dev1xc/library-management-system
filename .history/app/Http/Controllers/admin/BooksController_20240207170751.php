<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index() {
      $data = Book::all();
      return view("");
    }
}
