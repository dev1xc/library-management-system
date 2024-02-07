<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\profile\EditRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function __construct() {
      $this->middleware("auth");
    }
    public function index() {
      $id = Auth::user()->id;
      $data = User::findOrFail($id);
      return view("admin.functions.profile.index",compact("data"));
    }
    public function edit(EditRequest $request) {
      $id = Auth::user()->id;
      $data = $request->all();
      User::findOrFail($id)->update($data);
      return redirect("/admin/category")->with("success", "Add new Category success");
    }
}
