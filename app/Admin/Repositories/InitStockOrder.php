<?php



namespace App\Admin\Repositories;

use App\Models\InitStockOrderModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class InitStockOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
