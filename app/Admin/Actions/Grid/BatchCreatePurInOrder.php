<?php



namespace App\Admin\Actions\Grid;

use Dcat\Admin\Grid;
use Dcat\Admin\Grid\BatchAction;

class BatchCreatePurInOrder extends BatchAction
{
    /**
     * @return string
     */
    protected $title = '选择单据入库';

    public function html()
    {
        return <<<HTML
<span {$this->formatHtmlAttributes()} id="batch-purinorder-create-select-resourc" href="javascript:void(0)"><button class="btn btn-primary dialog-create  btn-mini"><i
class="feather icon-plus"></i> {$this->title()}</button></span>
HTML;
    }

    public function script()
    {
        $url = route('purchase-orders.index', [Grid::IFRAME_QUERY_NAME => 1]);
        return <<<JS
        $("#batch-purinorder-create-select-resourc").on("click",function(){
            var url = "{$url}";
            layer.open({
                type: 2,
                area: ['70%', '90%'], //宽高
                content:[url,'no'],
                end: function(){
                    Dcat.reload();
                }
            })
        });

JS;
    }
}
