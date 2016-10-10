<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplyer extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'sex',
        'deport',
        'tel',
        'email',
        'address'
    ];
}
