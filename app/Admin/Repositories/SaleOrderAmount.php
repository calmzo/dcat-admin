<?php



namespace App\Admin\Repositories;

use App\Models\SaleOrderAmountModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SaleOrderAmount extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
