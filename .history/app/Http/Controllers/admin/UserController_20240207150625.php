<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
}
