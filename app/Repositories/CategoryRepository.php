<?php

namespace App\Repositories;

use App\Models\PriceCategoryModel as Model ;
use Illuminate\Database\Eloquent\Collection;


/**
 * Class CategoryRepository
 * @package App\Repositories
 *
 * Класс для работы с PriceCategoryModel
 */

class CategoryRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * @param $id
     * @return Model
     *
     * Получить модель для редктирования в админке
     */
    public function getForEdit($id)
    {
        return $this->startCondition()->find($id);
    }

    /**
     * @return Collection
     *
     * Получить список категорий для вывода комбобокса
     */
    public function getForCombobox()
    {
        return $this->startCondition()->select('id','title')->get();
    }

    public function getAllWithPaginate($count_in_page = null)
    {
        return $this->startCondition()->select('id','title')->where('id', '>', '1')->paginate($count_in_page);
    }
}