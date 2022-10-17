<?php



namespace App\Observers;

use App\Models\InventoryItemModel;

class InventoryItemObserver
{
    //
    public function saving(InventoryItemModel $item)
    {
        $item->diff_num = $item->actual_num - $item->should_num;
    }
}
