<?php



namespace App\Admin\Repositories;

use App\Models\CraftModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Craft extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
