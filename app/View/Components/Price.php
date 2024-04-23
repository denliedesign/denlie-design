<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Price extends Component
{
    public $item;
    public $cost;

    public function __construct($item, $cost)
    {
        $this->item = $item;
        $this->cost = $cost;
    }

    public function render()
    {
        return view('components.price');
    }
}
