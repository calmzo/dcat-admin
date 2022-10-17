<?php



namespace App\Admin\Repositories;

use App\Models\PurchaseInItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class PurchaseInItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
