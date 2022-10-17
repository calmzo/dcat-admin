<?php



namespace App\Admin\Controllers;

use Dcat\Admin\Controllers\AdminController;
use Dcat\Admin\Layout\Content;

class ReportCenterController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->title("报表中心")
            ->description(' ')
            ->body(view('report-centers.index'));
    }
}
