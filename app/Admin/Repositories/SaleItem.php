<?php



namespace App\Admin\Repositories;

use App\Models\SaleItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SaleItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
