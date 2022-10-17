<?php



namespace App\Admin\Extensions\Grid;

use Dcat\Admin\Grid\Displayers\AbstractDisplayer;

class EmptyData extends AbstractDisplayer
{
    public function display()
    {
        return $this->value ?: '-';
    }
}
