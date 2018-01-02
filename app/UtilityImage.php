<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UtilityImage extends Model
{
    protected $table='utility_image';
    public $timestamps = false;
        
    public function utility() {
        return $this -> belongsto('App\Utility', 'utility_id');
    }
}
