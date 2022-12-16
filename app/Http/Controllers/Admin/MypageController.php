<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Reserve;

class MypageController extends Controller
{
  public function index(Request $request)
  {   
      return view('admin.tennisreserve.mypage');
  }
  public function add(Request $request)
  {   
      
        // Reserve Modelからデータを取得する
      $reserve = Reserve::find($request->id);
      if (empty($reserve)) {
          abort(404);    
      }
      $reserve = Reserve::all();
     
      return redirect('admin/mypage');
  }
  
}
