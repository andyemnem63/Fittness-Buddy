<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function meals() {
        return $this->belongsTo('App\Meals');
    }
}
