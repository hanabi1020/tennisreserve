<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'reserve_time' => 'required',
        
    );
}
