<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    public function variants(){
        return $this->hasMany(ProductVariant::class);
    }
    // public function colorVariants(){
    //     return $this->hasMany(ProductVariant::class)->where('type', 'color');
    // }
    // public function sizeVariants(){
    //     return $this->hasMany(ProductVariant::class)->where('type', 'size');
    // }
}
