<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    //Added 'many to many' report with the 'user model'
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
