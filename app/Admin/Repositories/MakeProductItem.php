<?php



namespace App\Admin\Repositories;

use App\Models\MakeProductItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class MakeProductItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
