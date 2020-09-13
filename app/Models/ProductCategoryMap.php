<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryMap extends Model
{
    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'cat_id');
    }
}
