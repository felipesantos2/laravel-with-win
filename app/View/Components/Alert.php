<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Blade;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $name = "Felipe",
        public $lastName = "Pinheiro",
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}