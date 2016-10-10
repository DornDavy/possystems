<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'size',
        'price',
        'qty',
        'expire'
    ];

    public function category()
    {
        return $this->belongsTo('');
    }

    public function order_details()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
