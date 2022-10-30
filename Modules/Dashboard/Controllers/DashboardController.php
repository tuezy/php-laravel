<?php
namespace Modules\Dashboard\Controllers;

use Tuezy\Base\BaseController;

class DashboardController extends BaseController{

    public function index(){
        return view('dashboard::index');
    }
}