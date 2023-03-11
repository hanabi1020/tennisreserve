<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reserve extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'reserve_time' => 'required',
        
    );
  protected $table = 'reserves';

  public $timestamps = false;

  public function getData()
  {
    $data = DB::table($this->table)->get();

    return $data;
  }
}
