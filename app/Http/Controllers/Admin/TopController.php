<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reserve;

class TopController extends Controller
{
     public function index(Request $request)
  {
      return view('admin.tennisreserve.top');
  }
  public function login(Request $request)
  {
      return redirect('admin/mypage');
  }
  public function signup(Request $request)
  {
      return redirect('admin/mypage');
  }
}
