<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/*use Illuminate\Database\Eloquent\SoftDeletes;*/

class PriceCategoryModel extends Model
{
    //use SoftDeletes;

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

    public function parent()
    {
        return $this->belongsTo('App\Models\PriceCategoryModel', 'parent_id', 'id');
    }
}
