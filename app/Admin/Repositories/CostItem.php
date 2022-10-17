<?php



namespace App\Admin\Repositories;

use App\Models\CostItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CostItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
