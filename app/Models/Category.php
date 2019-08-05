<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
