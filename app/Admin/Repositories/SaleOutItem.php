<?php



namespace App\Admin\Repositories;

use App\Models\SaleOutItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SaleOutItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
