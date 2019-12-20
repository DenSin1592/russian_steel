<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceImageModel extends Model
{
    protected $table = 'pricelist_images';
    protected $fillable = [
        'title',
        'img',
        'path'
    ];
}
