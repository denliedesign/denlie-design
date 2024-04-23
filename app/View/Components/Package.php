<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Package extends Component
{
    public $icon;
//    public $group;
    public $item;
    public $description;
    public $cost;

    public function __construct($icon, $item, $description, $cost)
    {
        $this->icon = $icon;
//        $this->group = $group;
        $this->item = $item;
        $this->description = $description;
        $this->cost = $cost;
    }

    public function render()
    {
        return view('components.package');
    }
}
