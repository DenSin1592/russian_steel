<?php

namespace App\Repositories;

use App\Models\PriceImageModel;
use App\Models\PriceProductModel as Model ;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\PriceCategoryModel;

class ProductionRepository extends BaseRepository
{
    /**
     * Установить модель
     */
    protected function getModelClass()
    {
        return Model::class;
    }
    /**
     * Получить список для вывода всех продуктов.
     *
     * @return LengthAwarePaginator
     */
    public function getAllWithPaginate($count_in_page = 5)
    {
       $result = $this->startCondition()
           ->select('id','title', 'category_id', 'image_id', 'is_added', 'added_at')
           ->orderBy('id', 'DESC')
           ->with(['category' => function($query){
               $query->select('id', 'title');
           },
               'image' => function($query){
                   $query->select('id', 'title', 'path');
               }])
           ->paginate($count_in_page);

        return $result;
    }

    public function getOneById($id)
    {
        $result = $this->startCondition()->find($id);

        return $result;
    }

    public function getForComboboxCategory()
    {
        $Model = new PriceCategoryModel();
        $combobox = $Model
            ->select('id','title')
            ->where('id', '>', '1')
            ->get();
        unset($Model);

        return $combobox;
    }

    public function getForComboboxImage()
    {
        $Model = new PriceImageModel();
        $combobox = $Model
            ->select('id','title')
            ->get();
        unset($Model);

        return $combobox;
    }
}
