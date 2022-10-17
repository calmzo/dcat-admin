<?php



namespace App\Repositories;

use App\Models\SupplierModel;
use Illuminate\Support\Collection;
use Yxx\LaravelQuick\Repositories\BaseRepository;

class SupplierRepository extends BaseRepository
{
    /**
     * @return Collection
     */
    public static function pluck():Collection
    {
        return SupplierModel::orderBy('id', 'desc')->pluck('name', 'id');
    }
}
