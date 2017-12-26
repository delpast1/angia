<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
    public $timestamps = false;
    protected $fillable = ['id','created_date','name','phone','email', 'rating', 'point'];
    
    public function settings(){
        return $this -> hasMany('App\UsersPushSettings');
    }
}
