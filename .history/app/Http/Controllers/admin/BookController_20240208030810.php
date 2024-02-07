<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookLanguage;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
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
    $dataPublisher = Publisher::all();
    return view("admin.functions.book.index", compact("data", "dataCategory", 'dataPublisher'));
  }
  public function add()
  {
    $dataCategory = Category::all();
    $dataPublisher = Publisher::all();
    $dataLanguage = BookLanguage::all();
    return view("admin.functions.book.add", compact("dataCategory", "dataPublisher","dataLanguage"));
  }
  public function create(Request $request)
  {
    $data = $request->all();
    $file = $request->image;
    if (!empty($file)) {
      $data['image'] = $file->getClientOriginalName();
    }
    if (Book::create($data)) {
      if (!empty($file)) {
        $file->move('upload/book/image', $file->getClientOriginalName());
      }
      return redirect('/admin/book')->with('success', 'Thanh Cong');
    } else {
      return back()->with("error", "Error");
    }
  }
  public function edit($id)
  {
    $data = Book::findOrFail($id);
    $dataCategory = Category::all();
    $dataPublisher = Publisher::all();
    $dataLanguage = BookLanguage::all();
    return view("admin.functions.book.edit", compact("data", "dataCategory", "dataPublisher","dataLanguage"));
  }
  public function update(Request $request, $id)
  {
    $data = $request->all();
    Book::findOrFail($id)->update($data);
    return back();
  }
  public function delete($id)
  {
    Book::findOrFail($id)->delete();
    return back();
  }
}
