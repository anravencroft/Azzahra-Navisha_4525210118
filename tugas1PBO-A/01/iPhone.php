<?php

class iPhone
{
    // Properties
    /*
     * warna/color
     * storage/kapasitas penyimpanan
     */
    private string $color;
    private string $storage;

    // Methods
    /*
     * 1. Konstruktor() --> di PHP namanya __construct()
     * 2. getColor()
     * 3. getStorage()
     */

    // Konstruktor
    /*
     * jadi setiap objek yang dibentuk dari class harus memberikan nilai/value
     * terhadap beberapa properties
     */
    public function __construct(string $color, string $storage)
    {
        $this->color = $color;
        $this->storage = $storage;
    }

    // public -> bisa diakses dari umum
    // : string --> output dari method getColor tipe datanya string
    // getColor() --> adalah nama method
    // return --> karena di definisi method ada outputnya, maka di dalam method harus
    // menggunakan return supaya punya keluaran/output.
    public function getColor(): string
    {
        return $this->color;
    }

    public function getStorage(): string
    {
        return $this->storage;
    }
}
