<?php

namespace App;

use App\Enclosure;

class Zoo
{
    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;

    public static function getAquarium(): Enclosure
    {
        return self::$aquarium;
    }

    public static function getAviary(): Enclosure
    {
        return self::$aviary;
    }

    public static function getFence(): Enclosure
    {
        return self::$fence;
    }

    public static function addAnimal(Animal $animal): void
    {
        $animalCapabilities = class_implements($animal);
        //var_dump($animalCapabilities);
        $path = "App\Interfaces\\";

        if (in_array($path . 'CanFly', $animalCapabilities)) {
            if (!self::$aviary)
                self::$aviary = new Enclosure();
            self::$aviary->addAnimal($animal);
        } else if (in_array($path . 'CanWalk', $animalCapabilities)) {
            if (!self::$fence)
                self::$fence = new Enclosure();
            self::$fence->addAnimal($animal);
        } else if (in_array($path . 'CanSwim', $animalCapabilities)) {
            if (!self::$aquarium)
                self::$aquarium = new Enclosure();
            self::$aquarium->addAnimal($animal); {
            }
        } else {
            echo "Cet animal ne peut être accepté dans ce zoo";
            trigger_error("Aucun enclos adapté pour cet animal");
        }
    }

    public static function visitTheZoo(): string
    {
        $visit = "Bienvenue au Zoo \n\n";

        $enclosures = [
            'aquarium' => ['instance' => self::$aquarium, 'label' => "l'Aquarium"],
            'fence' => ['instance' => self::$fence, 'label' => "l'Enclos"],
            'aviary' => ['instance' => self::$aviary, 'label' => "la Volière"]
        ];

        foreach ($enclosures as $enclosure) {
            if ($enclosure['instance']) {
                $visit .= "Voici {$enclosure['label']}. Vous pouvez y voir : \n";
                $visit .= $enclosure['instance']->toString();
                $visit .= "\n Continuons, veuillez me suivre.\n\n";
            }
        }
        $visit .= "La visite est terminée. N'oubliez pas de laisser une pièce pour le guide !\n";
        echo $visit;
        return $visit;
    }
}
