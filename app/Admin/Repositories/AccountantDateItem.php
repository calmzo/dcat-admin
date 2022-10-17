<?php



namespace App\Admin\Repositories;

use App\Models\AccountantDateItemModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AccountantDateItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
