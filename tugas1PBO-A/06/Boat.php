<?php

require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

// Subclass lain dari Vehicle yang mengimplementasikan Movable dan Fuelable
class Boat extends Vehicle implements Movable, Fuelable
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    // Implementasi method dari interface Movable
    public function move(): void
    {
        echo $this->name . " bergerak di air." . PHP_EOL;
    }

    // Implementasi sendiri method refuel (menggantikan versi default)
    public function refuel(): void
    {
        echo $this->name . " mengisi bahan bakar solar khusus kapal." . PHP_EOL;
    }
}
