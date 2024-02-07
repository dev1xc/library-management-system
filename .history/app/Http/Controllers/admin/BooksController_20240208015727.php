<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BooksController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware("auth");
  }
  public function index()
  {
    $data = Book::paginate(5);
    $dataCategory = Category::all();
    return view("admin.functions.book.index", compact("data", "dataCategory"));
  }
  public function add()
  {
    $dataCategory = Category::all();
    $dataPublisher = Publisher::all();
    return view("admin.functions.book.add", compact("dataCategory"));
  }
  public function create(Request $request)
  {
    $data = $request->all();
    Book::create($data);
    return redirect("/admin/book");
  }
  public function edit($id)
  {
    $data = Book::findOrFail($id);
    $dataCategory = Category::all();
    return view("admin.functions.book.edit", compact("data", "dataCategory"));
  }
  public function update(Request $request, $id)
  {
    $data = $request->all();
    Book::findOrFail($id)->update($data);
    return redirect("/admin/book");
  }
  public function delete($id)
  {
    Book::findOrFail($id)->delete();
    return back();
  }
}
