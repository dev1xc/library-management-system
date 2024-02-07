<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index() {
      $data = Category::paginate(5);
      return view("admin.functions.category.index", compact("data"));
    }
}
