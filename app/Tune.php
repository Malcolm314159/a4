<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tune extends Model
{
    public function types() {
        return $this->belongsToMany('App\Type')->withTimestamps();
    }
}
