<?php



namespace App\Admin\Repositories;

use App\Models\SkuStockBatchModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class SkuStockBatch extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
