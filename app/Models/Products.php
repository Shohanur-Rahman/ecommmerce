<?php

namespace App\Models;

use App\Models\User\OrderProduct;
use App\Models\User\ProductReview;
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

    public function color()
    {
        return $this->belongsTo(ProductColor::class,'color_id');
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class,'size_id');
    }

   /* public  function rating()
    {
        $reviews = ProductReview::where('product_id',$this->id)->average('rating');
        return $reviews;
    }*/
}
