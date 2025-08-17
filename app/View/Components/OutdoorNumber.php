<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OutdoorNumber extends Component
{
    public $targetTimestamp;
    /**
     * Create a new component instance.
     */
    public function __construct($targetDate)
    {
        $this->targetTimestamp = Carbon::parse($targetDate)->timestamp * 1000;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.outdoor-number');
    }
}
