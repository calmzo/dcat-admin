<?php



namespace App\Admin\Repositories;

use App\Models\CheckProductModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CheckProduct extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
