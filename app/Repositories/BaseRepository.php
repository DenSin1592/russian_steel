<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Mixed_;

/**
 * Class BaseRepository
 * @package App\Repositories
 *
 * Получает сущность из модели. Не может создавать/изменять сущность
 */
abstract class BaseRepository
{
    protected $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    abstract protected function getModelClass();

    /**
     * @return \Illuminate\Contracts\Foundation\Application|mixed
     *
     * Вернуть клон пустой модели, что бы продолжать работать с моделью, не хранящей состояние
     */
    protected function startCondition()
    {
        return clone $this->model;
    }
}









