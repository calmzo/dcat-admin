<?php



namespace App\Observers;

use App\Models\SkuStockBatchModel;
use App\Models\SkuStockModel;

class SkuStockBatchObserver
{
    /**
     * @param SkuStockBatchModel $skuStockBatchModel
     */
    public function saved(SkuStockBatchModel $skuStockBatchModel): void
    {
        $num = SkuStockBatchModel::query()->where([
            'sku_id' => $skuStockBatchModel->sku_id,
            'percent' => $skuStockBatchModel->percent,
            'standard'       => $skuStockBatchModel->standard,
        ])->sum('num');
        SkuStockModel::updateOrCreate(
            [
                'sku_id' => $skuStockBatchModel->sku_id,
                'percent' => $skuStockBatchModel->percent,
                'standard'       => $skuStockBatchModel->standard,
            ],
            ['num' => $num]
        );
    }
}
