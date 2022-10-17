<?php



namespace App\Admin\Repositories;

use App\Models\StockHistoryModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class StockHistory extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
