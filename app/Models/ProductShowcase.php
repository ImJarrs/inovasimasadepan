<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductShowcase extends Model
{
    use HasFactory;

    protected $table = 'product_showcases';

    protected $fillable = [
        'slug',
        'name',
        'page_title',
        'hero_image',
        'advantages',
        'detail_cards',
        'gallery_images',
    ];

    protected $casts = [
        'advantages' => 'array',
        'detail_cards' => 'array',
        'gallery_images' => 'array',
    ];
}
