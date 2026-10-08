<?php

require_once 'BangunDatar.php';

class Segitiga extends BangunDatar
{
    private int $alas;
    private int $tinggi;

    public function __construct(int $alas, int $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    // intdiv() dipakai agar sama dengan pembagian integer di Java
    public function luas(): float
    {
        return intdiv($this->alas * $this->tinggi, 2);
    }
}
