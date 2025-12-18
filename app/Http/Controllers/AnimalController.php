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
            "photo" => "bella.png"
        ]);

        Animal::create([
            "name" => "Luna",
            "species" => "Chat",
            "age" => 3,
            "description" => "Une chatte calme et câline qui aime les endroits tranquilles.",
            "photo" => "luna.png"
        ]);

        Animal::create([
            "name" => "Max",
            "species" => "Chien",
            "age" => 3,
            "description" => "Un jeune chiot plein d’énergie qui adore courir et jouer dehors.",
            "photo" => "max.png"
        ]);

        return "Les animaux ont été créés avec succès";
    }

    public function createCoquillette()
    {
        Animal::create([
            "name" => "Coquillette",
            "species" => "Chien",
            "age" => 3,
            "description" => "Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.",
            "photo" => "coquillette.png"
        ]);

        return redirect()->route('home');
    }

    public function update($id)
    {
        $animal = Animal::find($id);

        if (!$animal) {
            return "Erreur : L'animal avec l'ID n°$id n'existe pas";
        }

        $animal->name = $animal->name . " Modifié";
        $animal->save();

        return redirect()->route('home');
    }

    public function delete($id)
    {

        $animal = Animal::find($id);

        if (!$animal) {
            return "Erreur : L'animal avec l'ID n°$id n'existe pas";
        }

        $animal->delete();

        return redirect()->route('home');
    }

    public function show($id)
    {

        $animal = Animal::find($id);

        if (!$animal) {
            return "Erreur : L'animal avec l'ID n°$id n'existe pas";
        }

        return view('pages.animal-details', ['animal' => $animal]);
    }

  
}
