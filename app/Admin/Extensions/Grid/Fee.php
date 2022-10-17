<?php



namespace App\Admin\Extensions\Grid;

use Dcat\Admin\Grid\Displayers\AbstractDisplayer;

class Fee extends AbstractDisplayer
{
    public function display()
    {
        return '￥' . money_formatter($this->value);
    }
}
