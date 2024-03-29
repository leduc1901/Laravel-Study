<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];
    public function orderDetails()
    {
        return $this->hasMany('App\Models\OrderDetail'); 
    }
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
