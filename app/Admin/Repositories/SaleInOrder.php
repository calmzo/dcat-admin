<?php



namespace App\Admin\Repositories;

use App\Models\SaleInOrderModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SaleInOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
