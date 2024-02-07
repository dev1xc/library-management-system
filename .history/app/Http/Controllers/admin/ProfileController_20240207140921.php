<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function __construct() {
      $this->middleware("auth");
    }
    public function index($id) {
      $id = Auth
      $data = User::findOrFail($id);
      return view("admin.functions.profile.index",compact("data"));
    }
}
