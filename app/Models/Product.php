<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'category_id',
        'slug',
        'product_name',
        'product_description',
        'sku',
        'discount',
        'price',
        'image',
        'status',
    ];

    protected $appends = [
        'product_image',
        'final_price',
        'has_discount',
    ];

    protected $casts = [
        'reviews_avg_stars' => 'int',
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function hasDiscount(): bool
    {
        return $this->discount > 0;
    }

    public function getHasDiscountAttribute()
    {
        return $this->hasDiscount();
    }

    public function getFinalPriceAttribute()
    {
        if ($this->hasDiscount()) {
            return round($this->price - ($this->price * $this->discount / 100), 2);
        }

        return $this->price;
    }

    public function getProductImageAttribute()
    {
        return config('app.admin_panel_url') . '/' . $this->image;
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }
}
