<?php



namespace App\Observers;

use App\Models\MakeProductItemModel;

class MakeProductItemObserver
{
    public function saving(MakeProductItemModel $makeProductItemModel): void
    {
        if ($makeProductItemModel->isDirty('actual_num')) {
            $task = $makeProductItemModel->order->with_order;
            $avgCostPrice = bcdiv($task->sum_cost_price, $makeProductItemModel->actual_num, 2);
            $makeProductItemModel->cost_price = $avgCostPrice;
        }
    }
}
