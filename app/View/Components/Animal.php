<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Animal extends Component
{
    public $nom;
    public $espece;
    public $age;
    public $description;
    public $image;

    public function __construct($nom, $espece, $age, $description, $image)
    {
        $this->nom = $nom;
        $this->espece = $espece;
        $this->age = $age;
        $this->description = $description;
        $this->image = $image;
    }

    public function render(): View|Closure|string
    {
        return view('components.animal');
    }
}
