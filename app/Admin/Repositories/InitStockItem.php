<?php



namespace App\Admin\Repositories;

use App\Models\InitStockItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class InitStockItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
