<?php



namespace App\Admin\Repositories;

use App\Models\PositionModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Position extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
