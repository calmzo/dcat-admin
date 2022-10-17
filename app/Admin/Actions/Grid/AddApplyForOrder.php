<?php



namespace App\Admin\Actions\Grid;

use Dcat\Admin\Grid\RowAction;

class AddApplyForOrder extends RowAction
{
    public $title = "生产领料";

    public function html()
    {
        $url = route('apply-for-orders.create', ['with_id' => $this->getKey()]);
        return <<<HTML
<a class="{$this->getElementClass()} dialog-create" href="javascript:void(0)" data-url="$url">{$this->title()}</a>
HTML;
    }

    public function script()
    {
        $class = $this->getElementClass();
        return <<<JS
        $(".{$class}").parent().parent().unbind('dblclick');
JS;
    }
}
