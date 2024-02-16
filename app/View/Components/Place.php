<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Place extends Component
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
        $place = [
            "Aquarium" => "aquarium.jpg",
            "Acarde" => "acarde.jpg",
            "Cinema" => "cinema.jpg",
            "Exhibition" => "exhibition.jpg",
            "Park" => "park.jpg"
        ];

        return view('components.place', compact('place'));
    }
}
