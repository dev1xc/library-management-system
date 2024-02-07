<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
  public function __construct()
  {
    $this->middleware("auth");
  }
  public function index()
  {
    $id = Auth::user()->id;
    $data = User::findOrFail($id);
    return view("admin.functions.profile.index", compact("data"));
  }
  public function edit(Request $request)
  {
    $id = Auth::user()->id;
    $data = $request->except(['_token']);
    $file = $request->image;
    if (!empty($file)) {
      $data['image'] = $file->getClientOriginalName();
    }
    if (User::where('id', $id)->update($data)) {
      if (!empty($file)) {
        $file->move('upload/user/avatar', $file->getClientOriginalName());
      }
      return back();
    } else {
      return back()->with("error", "Error");
    }
  }
}
