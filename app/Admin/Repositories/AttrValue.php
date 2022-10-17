<?php



namespace App\Admin\Repositories;

use App\Models\AttrValueModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AttrValue extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
