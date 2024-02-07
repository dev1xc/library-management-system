<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\category\AddRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index() {
      $data = Category::paginate(5);
      return view("admin.functions.category.index", compact("data"));
    }
    public function add() {
      return view ("admin.functions.category.add");
    }
    public function create(AddRequest $request) {
      $data = Category::create($request->all());
      $data->save();
      return redirect("/admin/category")->with("success","Add new Category success");
    }
}

