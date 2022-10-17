<?php



namespace App\Observers;

use App\Models\ApplyForBatchModel;
use App\Models\ApplyForItemModel;
use Illuminate\Database\Eloquent\Builder;

class ApplyForItemObserver
{
    public function saving(ApplyForItemModel $applyForItemModel): void
    {
        ApplyForBatchModel::query()->where(function (Builder $query) use ($applyForItemModel) {
            $query->where("item_id", $applyForItemModel->id);
        })->delete();
        $applyForItemModel->actual_num = 0;
        $applyForItemModel->cost_price = 0;
    }

    public function deleted(ApplyForItemModel $applyForItemModel): void
    {
        ApplyForBatchModel::query()->where(function (Builder $query) use ($applyForItemModel) {
            $query->where("item_id", $applyForItemModel->id);
        })->delete();
    }
}
