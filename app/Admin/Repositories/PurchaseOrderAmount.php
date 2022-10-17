<?php



namespace App\Admin\Repositories;

use App\Models\PurchaseOrderAmountModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class PurchaseOrderAmount extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
