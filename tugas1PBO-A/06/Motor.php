<?php

require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';
require_once 'FuelableDefault.php';

class Motor extends Vehicle implements Fuelable, Movable
{
    // Memakai refuel() default dari trait, sama seperti default method di Java
    use FuelableDefault;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    // Implementasi method dari interface Movable
    public function move(): void
    {
        echo $this->name . " bergerak di tanah gravel." . PHP_EOL;
    }
}
