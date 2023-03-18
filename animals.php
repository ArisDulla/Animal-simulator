<?php

require_once('terrestrial_animal.php');
require_once('sea​_Animals.php');

class Dog extends Terrestrial_animal
{
    public function __construct($speed, $name)
    {
        parent::__construct("Dog", $speed, $name);
    }
}

class Cat extends Terrestrial_animal
{
    public function __construct($speed, $name)
    {
        parent::__construct("Cat", $speed, $name);
    }
}

class Seal extends Sea​_Animals
{
    public function __construct($speed, $name)
    {
        parent::__construct("Seal", $speed, $name);
    }
}

class Whale extends Sea​_Animals
{
    public function __construct($speed, $name)
    {
        parent::__construct("Whale", $speed, $name);
    }
}

class Gorilla extends Terrestrial_animal
{

    public function __construct($speed, $name)
    {
        parent::__construct("Gorilla", $speed, $name);
    }
}

class Lion extends Terrestrial_animal
{

    public function __construct($speed, $name)
    {
        parent::__construct("Lion", $speed, $name);
    }
}

class Tiger extends Terrestrial_animal
{

    public function __construct($speed, $name)
    {
        parent::__construct("Tiger", $speed, $name);
    }
}
