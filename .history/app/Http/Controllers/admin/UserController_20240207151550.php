<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
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
        if(!empty($data['image'])){
            $data['image'] = $file->getClientOriginalName();
        }
        if(User::where('id', $id)->update($data)){
            if(!empty($file)){
                $file->move('upload/user/avatar', $file->getClientOriginalName());
            }
            return back();
        }else {
            return back()->with("error","Error");
        }
      User::create($data);
      return redirect('/admin/user')->with('success','success');
    }
}
