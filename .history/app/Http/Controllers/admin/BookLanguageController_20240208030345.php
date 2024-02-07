<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookLanguage;
use Illuminate\Http\Request;

class BookLanguageController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware("auth");
  }
  public function index()
  {
    $data = BookLanguage::paginate(5);
    return view("admin.functions.book-language.index", compact("data"));
  }
  public function add()
  {
    return view("admin.functions.book-language.add");
  }
  public function create(Request $request) {
    $data = $request->all();
    BookLanguage::create($data);
    return redirect('/admin/book-language');
  }
  public function edit($id) {
    $data = BookLanguage::findOrFail($id);
    return view('admin.functions.book-language.edit', compact('data'));
  }
  public function update(Request $request, $id)
}
