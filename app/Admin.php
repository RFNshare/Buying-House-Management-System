<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
   // public $directory = "/images/";


    protected $fillable = [
        'username', 'password', 'path' , 'email'
    ];

//    public function getPathAttribute($value)
//    {
//        return $this->directory .$value;
//    }
}
