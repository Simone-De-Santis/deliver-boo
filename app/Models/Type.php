<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //// Added 'one to many' report with the 'products model'
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
