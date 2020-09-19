<?php

namespace App\Models\User;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function shippingAddress()
    {
        return $this->belongsTo(ShippingAddress::class,'shipping_id');
    }
}
