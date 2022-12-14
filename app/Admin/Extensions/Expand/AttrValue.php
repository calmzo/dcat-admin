<?php



namespace App\Admin\Extensions\Expand;

use App\Models\AttrValueModel;
use Dcat\Admin\Support\LazyRenderable;
use Dcat\Admin\Widgets\Table;

class AttrValue extends LazyRenderable
{
    public function render()
    {
        $attribute_id = $this->key;
        $attributes = AttrValueModel::where('attr_id', $attribute_id)->get(['id', 'name']);
        $data = $attributes->map(function (AttrValueModel $attributeValueModel, $key) {
            return [
                'id' => $key + 1,
                'name' => $attributeValueModel->name,
            ];
        })->toArray();
        $titles = [
            '序号',
            '值名称',
        ];
        return Table::make($titles, $data);
    }
}
