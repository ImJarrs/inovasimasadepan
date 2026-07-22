<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
        'name',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'label1',
        'desc1',
        'label2',
        'desc2',
        'label3',
        'desc3',
        'label4',
        'desc4',
        'label5',
        'desc5',
        'label6',
        'desc6',
        'label7',
        'desc7',
        'label8',
        'desc8',
        'label9',
        'desc9',
        'label10',
        'desc10',
    ];
}
