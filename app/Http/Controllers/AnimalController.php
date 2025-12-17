<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{

    public function create()
    {
        Animal::create([
            "name" => "Bella",
            "species" => "Chien",
            "age" => 5,
            "description" => "Une labrador joueuse et affectueuse qui adore la compagnie.",
            "photo" => "blabla"
        ]);

        Animal::create([
            "name" => "Luna",
            "species" => "Chat",
            "age" => 3,
            "description" => "Une chatte calme et câline qui aime les endroits tranquilles.",
            "photo" => "blabla"
        ]);

        Animal::create([
            "name" => "Max",
            "species" => "Chien",
            "age" => 3,
            "description" => "Un jeune chiot plein d’énergie qui adore courir et jouer dehors.",
            "photo" => "blabla"
        ]);

        return "Les animaux ont été créés avec succès";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
