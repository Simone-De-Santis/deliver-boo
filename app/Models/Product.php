<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //// Added 'many to many' report with the 'ingredients' table
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient')->withTimestamps();
    }
    //// Added 'many to many' report with the 'orders' table
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order')->withPivot('quantity')->withTimestamps();
    }
    //// Added 'many to many' report with the 'users model'
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    //// Added 'one to many' report with the 'type model'
    public function types()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
