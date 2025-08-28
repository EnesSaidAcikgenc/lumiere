<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $fillable = ['category_id','product_name','image','explanation','price'];

    public function categories_products()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
