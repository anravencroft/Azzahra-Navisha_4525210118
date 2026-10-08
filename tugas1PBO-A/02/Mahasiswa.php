<?php

// Kelas Mahasiswa dengan constructor (pengganti overloading), setter, dan getter
class Mahasiswa
{
    // Variabel instance
    private string $nama;
    private string $nim;
    private int $umur;

    /*
     * PHP tidak mendukung constructor overloading seperti Java.
     * Sebagai gantinya, dipakai parameter dengan nilai default, sehingga
     * satu constructor bisa menggantikan ketiga constructor di Java:
     *
     * 1. new Mahasiswa()                       --> tanpa parameter
     * 2. new Mahasiswa("Budi", "12345678")     --> nama dan nim
     * 3. new Mahasiswa("Siti", "87654321", 22) --> nama, nim, dan umur
     */
    public function __construct(
        string $nama = "Belum Diisi",
        string $nim = "Belum Diisi",
        int $umur = 0
    ) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->umur = $umur;
    }

    // Getter dan Setter untuk nama
    public function getNama(): string
    {
        return $this->nama;
    }

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    // Getter dan Setter untuk nim
    public function getNim(): string
    {
        return $this->nim;
    }

    public function setNim(string $nim): void
    {
        $this->nim = $nim;
    }

    // Getter dan Setter untuk umur
    public function getUmur(): int
    {
        return $this->umur;
    }

    public function setUmur(int $umur): void
    {
        $this->umur = $umur;
    }

    // Method untuk menampilkan informasi mahasiswa
    public function tampilkanInfo(): void
    {
        echo "Nama: " . $this->nama . PHP_EOL;
        echo "NIM: " . $this->nim . PHP_EOL;
        echo "Umur: " . $this->umur . PHP_EOL;
    }
}
