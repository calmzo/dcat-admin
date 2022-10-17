<?php



namespace App\Admin\Repositories;

use App\Models\ApplyForItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class ApplyForItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
