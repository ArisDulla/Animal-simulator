<?php


class Mammal
{
    protected $totalDistance;
    protected $kind;
    public $speed;
    public $name;
    public $distance;


    public function __construct($kind, $speed, $name)
    {
        $this->kind = $kind;
        $this->speed = $speed;
        $this->name = $name;
    }

    public function move($time)
    {
        $distance = $this->speed * $time;

        $this->distance = $distance;
        $this->totalDistance += $distance;
    }

    //public function __destruct()
    //{
    //    echo "The annimal is {$this->kind} , the name is {$this->name} and the speed is {$this->speed} \n.";
    //}

    public function set_speed($speed)
    {
        $this->speed = $speed;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_speed()
    {
        return $this->speed;
    }
    public function get_distance()
    {
        return $this->distance;
    }

    public function get_kind()
    {
        return $this->kind;
    }

    public function get_name()
    {
        return $this->name;
    }
}
