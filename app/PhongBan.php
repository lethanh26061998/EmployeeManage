<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class PhongBan extends Model
{
    //

    protected $table = 'phongbans';
    public $timestamps = false;
    public function users()
    {
        // return $this->belongsToMany('App\User');

        return $this->belongsToMany('App\User','phongban_user','phongban_id', 'user_id')->withPivot('id','chuc_vu');
    }
}
