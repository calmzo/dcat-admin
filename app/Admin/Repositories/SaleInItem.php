<?php



namespace App\Admin\Repositories;

use App\Models\SaleInItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SaleInItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
