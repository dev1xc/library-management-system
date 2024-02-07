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
    return view("admin.functions.book-language.index",compact("data"));
  }
}
