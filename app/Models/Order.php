<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //// Add the fillable fields
    protected $fillable = ['first_name', 'last_name', 'address', 'city', 'zip', 'phone_number', 'message_to_users', 'discount', 'price'];
    //// Added 'many to many' report with the 'products' table
    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity')->withTimestamps();
    }
}
