<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersPushSettings extends Model
{
    protected $table='users_push_settings';

    public function user() {
        return $this -> belongsto('App\User');
    }
}
