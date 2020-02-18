<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= 'products';

    public function lines()
    {
        return $this->hasMany('App\Line');
    }
}
