<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Reserve;

class MypageController extends Controller
{
  public function index(Request $request)
  {   
       // Reserve Modelからデータを取得する
      $reserve = Reserve::find($request->id);
     
      $reserves = Reserve::all();
    
      return view('admin.tennisreserve.mypage',['reserves' => $reserves]);
  }
   public function delete(Request $request)
  {   
     $reserve = Reserve::find($request);
        // レコードを削除
        $reserve->reserves()->delete();
        // 削除したら一覧画面にリダイレクト
        
        return redirect('admin/mypage')->with('$reserve',$reserve);;
      
  }
  public function add(Request $request)
  {   
     
      return redirect('admin/availability');
  }
  
}
