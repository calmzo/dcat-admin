<?php



namespace App\Observers;

use App\Models\SkuStockModel;

class SkuStockObserver
{
    /**
     * Handle the sku stock model "created" event.
     *
     * @param  \App\Models\SkuStockModel  $skuStockModel
     * @return void
     */
    public function created(SkuStockModel $skuStockModel)
    {
        //
    }

    /**
     * Handle the sku stock model "updated" event.
     *
     * @param  \App\Models\SkuStockModel  $skuStockModel
     * @return void
     */
    public function updated(SkuStockModel $skuStockModel)
    {
        //
    }

    /**
     * Handle the sku stock model "deleted" event.
     *
     * @param  \App\Models\SkuStockModel  $skuStockModel
     * @return void
     */
    public function deleted(SkuStockModel $skuStockModel)
    {
        //
    }

    /**
     * Handle the sku stock model "restored" event.
     *
     * @param  \App\Models\SkuStockModel  $skuStockModel
     * @return void
     */
    public function restored(SkuStockModel $skuStockModel)
    {
        //
    }

    /**
     * Handle the sku stock model "force deleted" event.
     *
     * @param  \App\Models\SkuStockModel  $skuStockModel
     * @return void
     */
    public function forceDeleted(SkuStockModel $skuStockModel)
    {
        //
    }

    /**
     * @param SkuStockModel $skuStockModel
     */
    public function saving(SkuStockModel $skuStockModel)
    {
    }
}
