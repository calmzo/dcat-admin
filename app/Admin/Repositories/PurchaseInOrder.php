<?php



namespace App\Admin\Repositories;

use App\Models\PurchaseInOrderModel as Model;
use App\Models\PurchaseOrderModel;
use Dcat\Admin\Repositories\EloquentRepository;
use Illuminate\Support\Collection;

class PurchaseInOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    /**
     * @return Collection
     */
    public function getWithOrder(): Collection
    {
        return PurchaseOrderModel::where([
            'status'        => PurchaseOrderModel::STATUS_WAIT,
            'review_status' => PurchaseOrderModel::REVIEW_STATUS_OK
        ])->orderBy('id', 'desc')->pluck('order_no', 'id');
    }
}
