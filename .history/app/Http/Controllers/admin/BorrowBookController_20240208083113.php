<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BorrowDetail;
use Illuminate\Http\Request;

class BorrowBookController extends Controller
{
  //
  public function index()
  {
    $data = BorrowDetail::paginate(5);
    $leagues = BorrowDetail::select('league_name')
      ->join('countries', 'countries.country_id', '=', 'leagues.country_id')
      ->where('countries.country_name', $country)
      ->get();
    return view("admin.functions.borrow.index", compact("data"));
  }
}
