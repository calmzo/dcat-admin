<?php



namespace App\Admin\Extensions\Grid;

use App\Models\AccountantDateItemModel;
use Dcat\Admin\Support\LazyRenderable;
use Dcat\Admin\Widgets\Table;

class AccountantDateItems extends LazyRenderable
{
    public function render()
    {
        $data = AccountantDateItemModel::query()
            ->where('accountant_date_id', $this->key)
            ->get()
            ->transform(function (AccountantDateItemModel $item, int $key) {
                return [
                    $item->month,
                    $item->start_at,
                    $item->end_at,
                ];
            });
        $titles = [
            "会计月",
            "开始日期",
            "结束日期"
        ];
        return Table::make($titles, $data->toArray());
    }
}
