<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

    protected $guarded = [];

    public function childrens()
    {
        return $this->hasMany(ProductCategory::class,'parent_id');
    }


    public function parent()
    {
        return $this->belongsTo(ProductCategory::class,'parent_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_product_category');
    }


}
