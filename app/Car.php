<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Car
 *
 * @property integer $id
 * @property integer $price
 * @property string $make
 * @property string $model
 * @property string $produced_on
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereMake($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereModel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereProducedOn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Car whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = [
        'price',
        'make',
        'model',
        'produced_on'
    ];
}
