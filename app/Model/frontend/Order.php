<?php

namespace App\Model\frontend;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id','payment_id','paying_amount','balance_transection','stripe_order_id','subtotal','shipping','vat','total','status','month','date','year'
    ];
}
