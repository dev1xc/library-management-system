<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionLogin extends Controller
{
    //
    public function index() {
      $id = Auth::user()->id;
      $data = Auth::user()->where("id", $id)->first();
    }
}
