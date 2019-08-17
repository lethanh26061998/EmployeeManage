<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongBan_User extends Model
{

    protected $fillable = [
        'user_id'
    ];
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    protected $table = 'phongban_user';
}
