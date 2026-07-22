<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banners';
    protected $fillable = [
        'home_banner',
        'promo_banner',
        'blog_banner',
        'card_banner',
        'wristband_banner',
    ];
}
