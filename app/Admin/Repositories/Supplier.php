<?php



namespace App\Admin\Repositories;

use App\Models\SupplierModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Supplier extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
