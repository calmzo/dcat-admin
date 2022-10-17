<?php



namespace App\Admin\Repositories;

use App\Models\StatementItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class StatementItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
