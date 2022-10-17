<?php



namespace App\Admin\Repositories;

use App\Models\SkuStockModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SkuStock extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
