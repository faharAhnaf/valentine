<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Food extends Component
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
        $food = [
            "Fried Chiken" => "fried-chicken.jpg",
            "Hot Dog" => "hot-dog.jpg",
            "Korean Food" => "korean-food.jpg",
            "Pasta" => "pasta.jpg",
            "Pizza" => "pizza.jpg",
            "Ramen" => "ramen.jpg",
            "Grill" => "grill.jpg",
            "Sushi" => "sushi.jpg",
        ];

        return view('components.food', compact('food'));
    }
}
