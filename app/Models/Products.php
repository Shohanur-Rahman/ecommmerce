<?php

namespace App\Models;

use App\Models\User\OrderProduct;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $guarded = [];

    public function user()
	{
	    return $this->belongsTo('App\User', 'user_id');
	}

	public function orderProduct()
    {
        return $this->hasOne(OrderProduct::class);
    }
}
