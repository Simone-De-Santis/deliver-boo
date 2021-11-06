<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function ingredients()
    {
        // added 'many to many' report with the 'ingredients' table
        return $this->belongsToMany('App\Models\Ingredient');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order')->withPivot('quantity')->withTimestamps();
    }
}
