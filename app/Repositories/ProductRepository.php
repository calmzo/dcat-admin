<?php



namespace App\Repositories;

use App\Models\ProductModel;
use Yxx\LaravelQuick\Repositories\BaseRepository;

class ProductRepository extends BaseRepository
{
    public static function buildItemNo()
    {
        $productId = ProductModel::orderBy('id', 'desc')->value('id') ?? 0;
        return str_pad($productId + 1, 8, "0", STR_PAD_LEFT);
    }

    /**
     * @param int $product_id
     * @return ProductModel|null
     */
    public function getInfoById(int $product_id): ?ProductModel
    {
        return ProductModel::find($product_id);
    }
}
