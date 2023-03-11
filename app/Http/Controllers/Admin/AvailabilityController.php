<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reserve;

class AvailabilityController extends Controller
{
  public function index(Request $request)
  {
      return view('admin.tennisreserve.availability');
  }
  public function add(Request $request)
  {   
      
      $this->validate($request, Reserve::$rules);
      $reserve = new Reserve;
      $req = $request->all();
      $form = [
        "reserve_date" => date("Y-m-d"),
        "reserve_time" => $req['reserve_time'],
        "reserve_flg" => "1",
        "user_id" => 12345,
      ];
      $reserve->fill($form);
      $reserve->save();
      
      return redirect('admin/mypage');
  }
   

}
