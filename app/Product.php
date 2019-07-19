<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $directory = "/images/";


    protected $fillable = [
        'name', 'description', 'price', 'Discounted_Price', 'Sizes', 'Colors','Tags', 'path'
    ];

    public function getPathAttribute($value)
    {
        return $this->directory .$value;
    }
}
