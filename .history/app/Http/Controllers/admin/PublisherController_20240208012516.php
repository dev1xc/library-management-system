<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware("auth");
  }
  public function index()
  {
    $data = Publisher::paginate(5);
    return view("admin.functions.pushlisher.index", compact("data"));
  }
  public function add()
  {
    return view("admin.functions.pushlisher.add");
  }
  public function create(Request $request)
  {
    $data = $request->all();
    Publisher::create($data);
    return redirect('/admin/publisher');
  }
  public function edit()
  {
    return view("admin.functions.pushlisher.edit");
  }
}
