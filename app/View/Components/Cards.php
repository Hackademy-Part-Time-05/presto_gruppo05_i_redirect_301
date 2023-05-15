<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cards extends Component
{
    /**
     * Create a new component instance.
     */
    public $announcement;
    public $category;
    public function __construct($announcement, $category)
    {
        $this->announcement=$announcement;
        $this->category=$category;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards');
    }
}
