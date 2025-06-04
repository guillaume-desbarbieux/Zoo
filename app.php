<?php
require __DIR__ . '/vendor/autoload.php';

use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Dove;
use App\Animals\Duck;
use App\Animals\Elephant;
use App\Animals\Fish;
use App\Animals\Parrot;
use App\Animals\Whale;
use App\Animals\Zebra;

//Début du code

$animals = array(
    new Fish("Némo"),
    new Fish("Doris"),
    new Fish("Maurice"),
    new Fish("Moné"),
    new Fish("Risdo"),
    new BubbleFish("BubbleNémo"),
    new BubbleFish("BubbleDoris"),
    new BubbleFish("BubbleMaurice"),
    new CatFish("ChatNémo"),
    new CatFish("ChatDoris"),
    new ClownFish("ClownMaurice"),
    new Elephant("Babar"),
    new Elephant("Dumbo"),
    new Zebra("PassagePiéton"),
    new Parrot("Parrot1"),
    new Parrot("Parrot2"),
    new Parrot("Parrot3"),
    new Parrot("Parrot4"),
    new Parrot("Parrot5"),
    new Parrot("Parrot6"),
    new Parrot("Parrot7"),
    new Parrot("Parrot8"),
    new Parrot("Parrot9"),
    new Parrot("Parrot10"),
    new Dove("Peace"),
    new Dove("Love"));

    foreach ($animals as $animal) {
        echo $animal->getName()." : ".$animal->noise()."\n";
    }
    

