<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Keyword extends Component
{
    public $title;
    public $description;
    public $head1;
    public $head2;
    public $head3;
    public $head4;
    public $head5;
    public $content1;
    public $content2;
    public $content3;
    public $content4;
    public $content5;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $head3, $head2, $head1, $image1, $image2, $image3, $content2, $content3, $content1, $content4, $content5, $head4, $head5, $image4, $image5)
    {
        $this->title = $title;
        $this->description = $description;
        $this->head1 = $head1;
        $this->head2 = $head2;
        $this->head3 = $head3;
        $this->head4 = $head4;
        $this->head5 = $head5;
        $this->content1 = $content1;
        $this->content2 = $content2;
        $this->content3 = $content3;
        $this->content4 = $content4;
        $this->content5 = $content5;
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->image4 = $image4;
        $this->image5 = $image5;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.keyword');
    }
}
