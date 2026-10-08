<?php

// Trait pengganti "default method" dari interface Fuelable di Java.
// Class yang ingin memakai implementasi default cukup menulis: use FuelableDefault;
trait FuelableDefault
{
    public function refuel(): void
    {
        echo "Mengisi bahan bakar umum." . PHP_EOL;
    }
}
