<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
  //
  public function index()
  {
    $data = Publisher::paginate(5);
    return view("admin.functions.pushlisher.index");
  }
}
