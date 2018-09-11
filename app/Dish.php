<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'description', 
        'price',
        'restaurant_id'
    ];


    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
