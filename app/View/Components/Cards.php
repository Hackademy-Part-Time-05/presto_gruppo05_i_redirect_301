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
    public $latestAnnouncement;
    public function __construct($latestAnnouncement)
    {

        $this->latestAnnouncement=$latestAnnouncement;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards');
    }
}
