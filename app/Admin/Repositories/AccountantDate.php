<?php



namespace App\Admin\Repositories;

use App\Models\AccountantDateModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AccountantDate extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
