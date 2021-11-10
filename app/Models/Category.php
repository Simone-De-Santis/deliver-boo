<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //// Added 'many to many' report with the 'users' table
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
