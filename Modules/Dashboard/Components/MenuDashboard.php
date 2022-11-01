<?php
namespace Modules\Dashboard\Components;

use Illuminate\View\Component;

class MenuDashboard extends Component{

    public $items;

    public $active;

    public function __construct($items)
    {
        $this->items = $items;
        $this->active = 0;
    }

    public function render()
    {
        return view("dashboard::layouts.menu");
    }
}