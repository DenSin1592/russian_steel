<?php

namespace App\Observers;

use App\Models\PriceCategoryModel;
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
     * Handle the price category model "deleted" event.
     *
     * @param  \App\Models\PriceCategoryModel  $PriceCategoryModel
     * @return void
     */
    public function deleted(PriceCategoryModel $PriceCategoryModel)
    {
        //
    }

    /**
     * Handle the price category model "restored" event.
     *
     * @param  \App\Models\PriceCategoryModel  $PriceCategoryModel
     * @return void
     */
    public function restored(PriceCategoryModel $PriceCategoryModel)
    {
        //
    }

    /**
     * Handle the price category model "force deleted" event.
     *
     * @param  \App\Models\PriceCategoryModel  $PriceCategoryModel
     * @return void
     */
    public function forceDeleted(PriceCategoryModel $PriceCategoryModel)
    {
        //
    }

    private function setSlug($model)
    {
        if(empty($model->slug))
        $model->slug = Str::slug($model->title);
        else
            if($model->isDirty('title'))
                $model->slug = Str::slug($model->title);


    }
}
