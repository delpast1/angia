<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = 'service';
    public $timestamps = false;

    public function childServices() {
        return $this->hasMany('App\Service', 'parent_id');
    }

    public function parentService() {
        return $this->belongsTo('App\Menu', 'parent_id');
    }
}
