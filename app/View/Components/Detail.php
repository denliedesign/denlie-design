<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Detail extends Component
{
    public $product;
    public $screenshot1;
    public $screenshot2;
    public $description;
    public $pair;
    public $icon;
    public $iconPair;
    public $descriptionPair;
    public $linkPair;

    /**
     * Create a new component instance.
     */
    public function __construct($product, $screenshot1, $screenshot2, $description, $pair, $icon, $iconPair, $descriptionPair, $linkPair)
    {
        $this->product = $product;
        $this->screenshot1 = $screenshot1;
        $this->screenshot2 = $screenshot2;
        $this->description = $description;
        $this->pair = $pair;
        $this->icon = $icon;
        $this->iconPair = $iconPair;
        $this->descriptionPair = $descriptionPair;
        $this->linkPair = $linkPair;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detail');
    }
}
