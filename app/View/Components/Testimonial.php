<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonial extends Component
{
    public $background;
    public $state;
    public $scroll;
    public $logo;
    public $studio;
    public $quote;
    public $order;
    /**
     * Create a new component instance.
     */
    public function __construct($background, $state, $studio, $scroll, $logo, $quote, $order)
    {
        $this->background = $background;
        $this->state = $state;
        $this->studio = $studio;
        $this->scroll = $scroll;
        $this->logo = $logo;
        $this->quote = $quote;
        $this->order = $order;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.testimonial');
    }
}
