<?php



namespace App\Admin\Repositories;

use App\Models\CustomerModel;
use App\Models\SaleOrderModel;
use App\Models\SaleOutOrderModel as Model;
use Dcat\Admin\Repositories\EloquentRepository;
use Illuminate\Support\Collection;

class SaleOutOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public function customer(): Collection
    {
        return CustomerModel::OrderBy('id', 'desc')->pluck('name', 'id');
    }

    public function getWithOrder(): Collection
    {
        return SaleOrderModel::where([
            'status'        => SaleOrderModel::STATUS_DOING,
            'review_status' => SaleOrderModel::REVIEW_STATUS_OK
        ])->orderBy('id', 'desc')->pluck('order_no', 'id');
    }
}
