<?php



namespace App\Models;

/**
 * App\Models\CustomerDraweeModel
 *
 * @property int $id
 * @property int $customer_id 客户档案id
 * @property int $drawee_id 付款人id
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerDraweeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerDraweeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerDraweeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerDraweeModel whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerDraweeModel whereDraweeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerDraweeModel whereId($value)
 * @mixin \Eloquent
 */
class CustomerDraweeModel extends BaseModel
{
    protected $table = 'customer_drawee';
    public $timestamps = false;
}
