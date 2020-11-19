<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'property_id', 'amount', 'status', 'transaction_id', 'currency'
    ];
}
