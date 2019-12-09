<?php

namespace App\Repositories;

use App\Models\PriceProductModel as Model ;
use Illuminate\Pagination\LengthAwarePaginator;

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
    public function getAllWithPaginate($count_in_page = null)
    {
       $result = $this->startCondition()
           ->select('id','title', 'category_id', 'is_added', 'created_at')
           ->orderBy('id', 'DESC')
           ->with(['category' => function($query){
               $query->select('id', 'title');
           }])
           ->paginate($count_in_page);

        return $result;
    }
}
