<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index() {
      $data = books::paginate(5);
      return view("admin.functions.book.index",compact("data"));

    }
    public function add() {
      $data = books::create(request()->all());
      return view("admin.functions.book.add");
    }
}
