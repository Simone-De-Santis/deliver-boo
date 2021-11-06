<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    public function products()
    {
        // added 'many to many' report with the 'products' table
        return $this->belongsToMany('App\Models\Product')->withTimestamps();
    }
}
