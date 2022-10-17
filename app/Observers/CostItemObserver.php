<?php



namespace App\Observers;

use App\Models\CostItemModel;

class CostItemObserver
{
    public function saved(CostItemModel $costItemModel)
    {
        if ($costItemModel->isDirty('actual_amount')) {
            $order = $costItemModel->order;
            $order->total_amount = $order->items->sum('actual_amount');
            $order->saveOrFail();
        }
    }
}
