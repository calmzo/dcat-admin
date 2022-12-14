<?php



namespace App\Admin\Actions\Grid;

use Dcat\Admin\Grid\RowAction;
use Dcat\Admin\Widgets\Modal;

class ProductCheck extends RowAction
{
    /**
     * @return string
     */
    protected $title = '产品检验';

    public function render()
    {
        // 实例化表单类并传递自定义参数
        $form = \App\Admin\Forms\ProductCheckForm::make()->payload(['id' => $this->getKey()]);

        return Modal::make()
            ->lg()
            ->title($this->title)
            ->body($form)
            ->button($this->title);
    }
}
