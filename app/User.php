<?php

namespace App;

use App\Models\Category;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'activity_name', 'province', 'municipality', 'address', 'city', 'zip', 'vat', 'telephone', 'description', 'url', 'longitude', 'latitude',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function categories()
    {
        // Added 'many to many' report with the 'category model'
        return $this->belongsToMany('App\Models\Category')->withTimestamps();
    }

    public function products()
    {
        // Added 'many to many' report with the 'category model'
        return $this->hasMany('App\Models\Product');
    }
}
