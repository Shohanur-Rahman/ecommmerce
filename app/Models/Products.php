<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $guarded = [];

    public function user()
	{
	    return $this->belongsTo('App\User', 'user_id');
	}


	public function categories()
    {
        return $this->belongsToMany(ProductCategory::class,'cat_id');
    }
}
