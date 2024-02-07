<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\category\AddRequest;
use App\Http\Requests\admin\category\EditRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  //
  public function __construct() {
    $this->middleware("auth");
  }
  public function index()
  {
    $data = Category::paginate(1);
    return view("admin.functions.category.index", compact("data"));
  }
  public function add()
  {
    return view("admin.functions.category.add");
  }
  public function create(AddRequest $request)
  {
    $data = Category::create($request->all());
    $data->save();
    return redirect("/admin/category")->with("success", "Add new Category success");
  }
  public function edit($id)
  {
    $data = Category::findOrFail($id);
    return view("admin.functions.category.edit", compact('data'));
  }
  public function update(EditRequest $request, $id)
  {
    $data = $request->all();
    Category::findOrFail($id)->update($data);
    return redirect("/admin/category")->with("success", "Add new Category success");
  }
  public function delete($id) {
    $data = Category::findOrFail($id);
    $data->delete();
    return redirect()->back();
  }
}
