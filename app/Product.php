<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images()
    {
      return $this->hasMany('App\ProductImage','product_id','product_id');
    }

    public function category()
    {
      return $this->hasOne('App\Category','category_id','category_id');
    }
    public function brand()
    {
      return $this->hasOne('App\Brand','brand_id','brand_id');
    }
}
