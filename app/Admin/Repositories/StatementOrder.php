<?php



namespace App\Admin\Repositories;

use App\Models\StatementOrderModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class StatementOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
