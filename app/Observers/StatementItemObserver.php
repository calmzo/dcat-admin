<?php



namespace App\Observers;

use App\Models\StatementItemModel;
use App\Models\StatementOrderModel;

class StatementItemObserver
{
    public function saved(StatementItemModel $statementItemModel)
    {
        if ($statementItemModel->isDirty('discount_amount') && $statementItemModel->discount_amount) {
            /** @var StatementOrderModel $order */
            $order = $statementItemModel->order;
            $order->discount_amount = $order->items->sum('discount_amount');
            $order->saveOrFail();
        }
        if ($statementItemModel->isDirty('actual_amount') && $statementItemModel->actual_amount) {
            /** @var StatementOrderModel $order */
            $order = $statementItemModel->order;
            $order->actual_amount = $order->items->sum('actual_amount');
            $order->saveOrFail();
        }
    }
}
