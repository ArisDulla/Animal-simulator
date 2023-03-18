<?php

require_once("animals.php");
require_once('mammal.php');
require_once('terrestrial_animal.php');


class AnimalSimulator
{

    public $animals = [];
    public $dogs = [];
    public $cats = [];
    public $seals = [];
    public $gorillas = [];
    public $lions = [];
    public $tigers = [];
    public $whales = [];

    public function createDog($speed, $name)
    {
        $dog = new Dog($speed, $name);

        $this->dogs[] = $dog;
        $this->animals[] = $dog;

        return $dog;
    }

    public function createCat($speed, $name)
    {
        $cat = new Cat($speed, $name);

        $this->cats[] = $cat;
        $this->animals[] = $cat;
    }

    public function createSeal($speed, $name)
    {
        $seal = new Seal($speed, $name);

        $this->seals[] = $seal;
        $this->animals[] = $seal;
    }
    public function createGorilla($speed, $name)
    {
        $gorilla = new Gorilla($speed, $name);

        $this->gorillas[] = $gorilla;
        $this->animals[] = $gorilla;
    }
    public function createLion($speed, $name)
    {
        $lions = new Lion($speed, $name);

        $this->lions[] = $lions;
        $this->animals[] = $lions;
    }
    public function createTiger($speed, $name)
    {
        $tiger = new Tiger($speed, $name);

        $this->tigers[] = $tiger;
        $this->animals[] = $tiger;
    }
    public function createWhale($speed, $name)
    {
        $whale = new Whale($speed, $name);

        $this->whales[] = $whale;
        $this->animals[] = $whale;
    }

    // FIND MAX DISTANCE  --- OPTION 1 -- είναι μια μέθοδος που ορίζεται στην κλάση ,,, $this->dogs  
    public function findMaxDogDistance()
    {
        $maxDistance = -1;
        $maxDistanceDog = null;

        foreach ($this->dogs as $animal) {
            if ($animal->distance > $maxDistance) {
                $maxDistance = $animal->distance;
                $maxDistanceDog = $animal;
            }
        }
        echo "\n\nNAME = " . $maxDistanceDog->name . " MAX Distance = " . $maxDistanceDog->distance . "\n\n";

        return $maxDistanceDog;
    }

    //-------------------------------------------------------------------------
    //
    // STATIC METHODS
    //

    // FIND MAX DISTANCE   --- OPTION 2 --- Με αυτην την επιλογη μπορουμε να ελέγξουμε και αλλο array
    //
    public static function findMaxDistance(array $animals88)
    {
        $maxDistance = -1;
        $maxDistanceDog = null;

        foreach ($animals88 as $animal) {
            if ($animal->distance > $maxDistance) {
                $maxDistance = $animal->distance;
                $maxDistanceDog = $animal;
            }
        }
        echo "\n\nNAME = " . $maxDistanceDog->name . " MAX Distance = " . $maxDistanceDog->distance . "\n\n";

        return $maxDistanceDog;
    }

    // PRINT SPEEDS
    //
    public static function printAnimalSpeeds(array $animals88)
    {
        echo "ALL ANIMALS SPEEDS \n";
        foreach ($animals88 as $animal) {
            echo  $animal->get_speed() . "\n";
        }
        echo "\n";
    }
}
