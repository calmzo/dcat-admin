<?php



namespace App\Admin\Repositories;

use App\Models\ApplyForOrderModel as Model;
use App\Models\TaskModel;
use Dcat\Admin\Repositories\EloquentRepository;
use Illuminate\Support\Collection;

class ApplyForOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public function getWithOrder(): Collection
    {
        return TaskModel::where('status', '!=', TaskModel::STATUS_FINISH)->orderBy('id', 'desc')->pluck('order_no', 'id');
    }
}
