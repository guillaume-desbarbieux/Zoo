<?php

namespace App;

class Enclosure
{
    public array $animals;

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function toString(): string
    {
        $answer = "";
        foreach ($this->animals as $animal) {
            $answer .= $animal->getName() . " who is a  " .substr(get_class($animal),12)." and makes ".$animal->getNoise() . "\n";
        }
        return $answer;
    }
}
