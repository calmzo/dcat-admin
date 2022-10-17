<?php



namespace App\Admin\Repositories;

use App\Models\PurchaseItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class PurchaseItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
