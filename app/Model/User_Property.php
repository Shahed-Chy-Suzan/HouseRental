<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User_Property extends Model
{
    protected $fillable = [
        'name','email','phone','address','subcity','city','bedroom','bathroom','parking','type','kitchen','area','price','category','details','video','purpose','image_one','image_two','image_three',
    ];
}
