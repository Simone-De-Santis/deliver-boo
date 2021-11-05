<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function users()
    {
        // added 'many to many' report with the 'users' table
        return $this->belongsToMany('App\User');
    }
}
