<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;


class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'category_id', 'slug', 'sale_price', 'attributes', 'description'];

    protected static function booted()
    {
        static::creating(function ($product) {
            if (!$product->slug) {
                $product->slug = Str::slug($product->name);
            }
        });
    }

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
