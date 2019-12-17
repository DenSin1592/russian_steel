<?php

namespace App\Observers;

use App\Models\PriceProductModel;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ProductObserver
{
    /**
     * Handle the price product model "creating" event.
     *
     * @param  \App\Models\PriceProductModel  $priceProductModel
     * @return void
     */
    public function creating(PriceProductModel $priceProductModel)
    {
        $this->setSlug($priceProductModel);
        $this->setHTML($priceProductModel);
        $this->setExcerpt($priceProductModel);
        $this->setAddedAt($priceProductModel);

    }
    /**
     * Handle the price product model "created" event.
     *
     * @param  \App\Models\PriceProductModel  $priceProductModel
     * @return void
     */
    public function created(PriceProductModel $priceProductModel)
    {
        //
    }

    /**
     * Handle the price product model "updating" event.
     *
     * @param  \App\Models\PriceProductModel  $priceProductModel
     * @return void
     */
    public function updating(PriceProductModel $priceProductModel)
    {
        $this->setSlug($priceProductModel);
        $this->setHTML($priceProductModel);
        $this->setExcerpt($priceProductModel);
        $this->setAddedAt($priceProductModel);
    }
    /**
     * Handle the price product model "updated" event.
     *
     * @param  \App\Models\PriceProductModel  $priceProductModel
     * @return void
     */
    public function updated(PriceProductModel $priceProductModel)
    {

    }

    /**
     * Handle the price product model "deleted" event.
     *
     * @param  \App\Models\PriceProductModel  $priceProductModel
     * @return void
     */
    public function deleted(PriceProductModel $priceProductModel)
    {
        //
    }

    /**
     * Handle the price product model "restored" event.
     *
     * @param  \App\Models\PriceProductModel  $priceProductModel
     * @return void
     */
    public function restored(PriceProductModel $priceProductModel)
    {
        //
    }

    /**
     * Handle the price product model "force deleted" event.
     *
     * @param  \App\Models\PriceProductModel  $priceProductModel
     * @return void
     */
    public function forceDeleted(PriceProductModel $priceProductModel)
    {
        //
    }

    private function setSlug($priceProductModel)
    {
        /*if(empty($priceProductModel->slug))
            $priceProductModel->slug = Str::slug($priceProductModel->title);
        else*/
            if($priceProductModel->isDirty('title'))
                $priceProductModel->slug = Str::slug($priceProductModel->title);
    }

    private function setHTML($priceProductModel)
    {
        if($priceProductModel->isDirty('content_row'))
            $priceProductModel->content_html = ("HTML" . $priceProductModel->content_row);
    }

    private function setExcerpt($priceProductModel)
    {
        if($priceProductModel->isDirty('content_row'))
            $priceProductModel->excerpt = ("excerpt" . substr($priceProductModel->content_row,0, 50)) . "..." ;
    }

    private function setAddedAt($priceProductModel)
    {
        if($priceProductModel->is_added and $priceProductModel->isDirty('is_added'))
            $priceProductModel->added_at = Carbon::now();
    }
}
