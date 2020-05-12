<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Subcity extends Model
{
    protected $fillable = [
        'subcity_name', 'city_id',
    ];
}
