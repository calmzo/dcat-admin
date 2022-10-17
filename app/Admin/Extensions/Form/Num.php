<?php



namespace App\Admin\Extensions\Form;

use Dcat\Admin\Form\Field;

class Num extends Field\Number
{
    public function render()
    {
        $this->min(0);
        $this->defaultAttribute('style', 'width: 4em');

        return parent::render();
    }
}
