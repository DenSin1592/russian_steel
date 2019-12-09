<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriceProductModel extends Model
{
    use SoftDeletes;

    protected $table = 'pricelist_products';

    public function category()
    {
        return $this->belongsTo(PriceCategoryModel::class);
    }

}

