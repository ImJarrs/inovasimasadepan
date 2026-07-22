<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardDesign extends Model
{
    protected $table = 'card_designs';
    
    protected $fillable = [
        'label',
        'image_path',
    ];
}
