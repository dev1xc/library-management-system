<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index() {
      $data = Book::paginate(5);
      return view("admin.functions.book.index",compact("data"));

    }
    public function add() {
      $data = Category::all();
      return view("admin.functions.book.add",compact("data"));
    }
    public function create(Request $request) {
      $data = $request->all();
      Book::create($data);
      return redirect("/admin/book");
    }
    public function edit() {
      return view("");
    }
}
