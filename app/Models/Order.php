<?php

namespace App\Models;

use Carbon\Carbon;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Add the fillable fields
    protected $fillable = ['first_name', 'last_name', 'address', 'city', 'zip', 'phone_number', 'message_to_users', 'discount', 'total_price'];
    // Added 'many to many' report with the 'products' table
    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity')->withTimestamps();
    }


    public function getFormattedDate($column, $format = 'd-m-Y H:i:s')
    {
        return Carbon::create($this->$column)->format($format);
    }
}
