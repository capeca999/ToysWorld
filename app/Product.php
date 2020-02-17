<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function lines()
    {
        return $this->hasMany('App\Line');
    }
}
