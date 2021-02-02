<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
        'name', 
        'ingerient_one',
        'ingredient_two',
        'ingredient_three',
        'alcool'
    ];
}
