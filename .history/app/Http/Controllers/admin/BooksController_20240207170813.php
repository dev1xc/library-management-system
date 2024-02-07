<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index() {
      $data = books::all();
      return view("admin.functions.book.index");
    }
}
