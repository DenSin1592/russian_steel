<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceCategoryModel extends Model
{
    protected $table = 'pricelist_categories';
    /*protected $fillable = [
        'id',
        'title',
        'parent_id',
        'image_id',
        'description',
        'slug'
     ];*/
    protected $guarded = [
        '_method',
        '_token'
    ];
}
