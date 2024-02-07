<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function __construct() {
      $this->middleware("auth");
    }
    public function index() {
      $data = User::paginate(5);
      return view("admin.functions.user.index",compact('data'));
    }
    public function add() {
      return view("admin.functions.user.add");
    }
    public function create(Request $request) {
      $data = $request->all();
      $data['password'] = Hash::make($data['password']);
      $file = $request->image;
        if(!empty($file)){
            $data['image'] = $file->getClientOriginalName();
        }
        if(User::create($data)){
            if(!empty($file)){
                $file->move('upload/user/avatar', $file->getClientOriginalName());
            }
            return redirect('/admin/user')->with('success','success');
        }else {
            return back()->with("error","Error");
        }
    }
    public function edit($id) {
      $data = User::find($id);
      return view("admin.functions.user.add");
    }
}