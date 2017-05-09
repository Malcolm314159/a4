<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function tunes() {
        return $this->hasMany('App\Tune');
    }
}
