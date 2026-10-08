<?php

// Interface untuk mengisi bahan bakar.
// Interface di PHP tidak boleh punya default method, jadi isi default-nya
// dipindahkan ke trait FuelableDefault (lihat FuelableDefault.php).
interface Fuelable
{
    public function refuel(): void;
}
