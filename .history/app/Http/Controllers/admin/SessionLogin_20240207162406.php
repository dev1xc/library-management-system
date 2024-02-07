<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionLogin extends Controller
{
    //
    public function index() {
      $id = Auth::user()->id;
    }
}
