<?php



namespace App\Admin\Controllers;

use App\Admin\Repositories\Drawee;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Controllers\AdminController;

class DraweeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Drawee(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('created_at');

            $grid->filter(function (Grid\Filter $filter) {
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Drawee(), function (Form $form) {
//            $form->display('id');
            $form->text('name');

//            $form->display('created_at');
//            $form->display('updated_at');
        });
    }
}
