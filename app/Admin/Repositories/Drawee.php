<?php



namespace App\Admin\Repositories;

use App\Models\DraweeModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Drawee extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
