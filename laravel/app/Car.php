<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'price',
        'make',
        'model',
        'produced_on'
    ];
}
