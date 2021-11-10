<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //// Added 'many to many' report with the 'products' table
    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity')->withTimestamps();
    }
}
