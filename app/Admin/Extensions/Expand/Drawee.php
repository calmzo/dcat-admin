<?php



namespace App\Admin\Extensions\Expand;

use App\Models\DraweeModel;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;

class Drawee extends LazyRenderable
{
    public function grid(): Grid
    {
        $id = $this->id;
        return Grid::make(new DraweeModel(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('created_at');
        });
    }
}
