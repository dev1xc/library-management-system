<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookLanguageController extends Controller
{
    //
    public function index() {
      $data = BookLanguageController::paginate(5);
      return view("");
    }
}
