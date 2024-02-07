<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function __construct() {
      $this->middleware("auth");
    }
    public function index($id) {

      return view("admin.functions.profile.index");
    }
}
