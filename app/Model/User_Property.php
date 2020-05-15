<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User_Property extends Model
{
    protected $fillable = [
        'user_id','city_id','subcity_id','name','email','phone','address','subcity','bedroom','bathroom','parking','type','kitchen','area','price','category','details','video','purpose','image_one','image_two','image_three','discount_price','status','user_id','property_code','map_link','date','month','year','trend','best_rated','hot_new','added_by',
    ];
}
