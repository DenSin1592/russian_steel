<?php

namespace App\Observers;

use App\Models\PriceCategoryModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryObserver
{
    /**
     * Handle the price category model "creating" event.
     *
     * @param  \App\Models\PriceCategoryModel  $model
     * @return void
     */
    public function creating(PriceCategoryModel $model)
    {
        $this->setSlug($model);
    }
    /**
     * Handle the price category model "created" event.
     *
     * @param  \App\Models\PriceCategoryModel  $PriceCategoryModel
     * @return void
     */
    public function created(PriceCategoryModel $PriceCategoryModel)
    {
        //
    }
    /**
     * Handle the price category model "updating" event.
     *
     * @param  \App\Models\PriceCategoryModel  $model
     * @return void
     */
    public function updating(PriceCategoryModel $model)
    {
        $this->setSlug($model);
    }
    /**
     * Handle the price category model "updated" event.
     *
     * @param  \App\Models\PriceCategoryModel  $PriceCategoryModel
     * @return void
     */
    public function updated(PriceCategoryModel $PriceCategoryModel)
    {
        //
    }

    /**
     * Handle the price category model "deleting" event.
     *
     * @param  \App\Models\PriceCategoryModel  $PriceCategoryModel
     * @return void
     */
    public function deleting(PriceCategoryModel $PriceCategoryModel)
    {
        $this->ChangedParentCategory($PriceCategoryModel);
        $this->ChangedCategoryIdProduct($PriceCategoryModel);
    }

    /**
     * Handle the price category model "deleted" event.
     *
     * @param  \App\Models\PriceCategoryModel  $PriceCategoryModel
     * @return void
     */
    public function deleted(PriceCategoryModel $PriceCategoryModel)
    {
       // dd(__METHOD__);
    }

    /**
     * Handle the price category model "restored" event.
     *
     * @param  \App\Models\PriceCategoryModel  $PriceCategoryModel
     * @return void
     */
    public function restored(PriceCategoryModel $PriceCategoryModel)
    {
        //dd(__METHOD__);
    }

    /**
     * Handle the price category model "force deleted" event.
     *
     * @param  \App\Models\PriceCategoryModel  $PriceCategoryModel
     * @return void
     */
    public function forceDeleted(PriceCategoryModel $PriceCategoryModel)
    {
        //dd(__METHOD__);
    }

    private function setSlug($model)
    {
        if($model->isDirty('title'))
                $model->slug = Str::slug($model->title);
    }

    private function ChangedParentCategory($PriceCategoryModel)
    {
        /*dd(DB::table('pricelist_categories')
            ->select('parent_id')
            ->where('parent_id', '=', $PriceCategoryModel->id)
            ->get());*/
        DB::table('pricelist_categories')
            ->select('parent_id')
            ->where('parent_id', '=',$PriceCategoryModel->id )
            ->update(array('parent_id' => 1));
    }

    private function ChangedCategoryIdProduct($PriceCategoryModel)
    {
        DB::table('pricelist_products')
            ->select('category_id', 'is_added')
            ->where('category_id', '=',$PriceCategoryModel->id )
            ->update(array('category_id' => 1, 'is_added' => 0));
    }
}
