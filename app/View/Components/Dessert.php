<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dessert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $dessert = [
            "Pudding" => "pudding.jpg",
            "Ice Cream" => "ice-cream.jpg",
            "Mochi" => "mochi.jpg"
        ];

        return view('components.dessert', compact('dessert'));
    }
}
