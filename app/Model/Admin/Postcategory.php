<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Postcategory extends Model
{
    protected $fillable = [
        'category_name_en', 'category_name_bn',
    ];
}
