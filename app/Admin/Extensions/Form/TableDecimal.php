<?php



namespace App\Admin\Extensions\Form;

use Dcat\Admin\Form\Field\Text;

class TableDecimal extends Text
{
    public static $js = '@jquery.inputmask';
    public static $css = '@jquery.inputmask';

    /**
     * @see https://github.com/RobinHerbots/Inputmask#options
     *
     * @var array
     */
    protected $options = [
        'alias'      => 'decimal',
        'rightAlign' => false,
    ];

    public function render()
    {
        $this->inputmask($this->options);
        $this->defaultAttribute('style', 'width: 7rem;flex:none');
        return parent::render();
    }
}
