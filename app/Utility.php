<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    //
    protected $table = 'utilities';
    public $timestamps = false;

    public function user() {
        return $this -> belongsto('App\User', 'manage_user_id');
    }

    public function images(){
        return $this -> hasMany('App\UtilityImage', 'utility_id');
    }
}
