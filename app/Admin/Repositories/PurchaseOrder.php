<?php



namespace App\Admin\Repositories;

use App\Models\PurchaseOrderModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class PurchaseOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
