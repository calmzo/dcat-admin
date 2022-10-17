<?php



namespace App\Admin\Repositories;

use App\Models\AttrModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Attr extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
