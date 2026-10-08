<?php

require_once 'Mahasiswa.php';

// Kelas MahasiswaInternational (Subclass) yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa
{
    // Variabel tambahan untuk mahasiswa internasional
    private string $negaraAsal;

    /*
     * Pengganti 3 constructor di Java:
     * 1. new MahasiswaInternational()
     * 2. new MahasiswaInternational($nama, $nim, $negaraAsal)
     * 3. new MahasiswaInternational($nama, $nim, $umur, $negaraAsal)
     *
     * Parameter ke-3 bisa berupa string (negara asal) atau int (umur),
     * jadi dibedakan dengan pengecekan tipe.
     */
    public function __construct(
        string $nama = "Belum Diisi",
        string $nim = "Belum Diisi",
        int|string|null $umurAtauNegara = null,
        ?string $negaraAsal = null
    ) {
        if (is_string($umurAtauNegara)) {
            // Constructor 2: nama, nim, negara asal
            parent::__construct($nama, $nim);
            $this->negaraAsal = $umurAtauNegara;
        } elseif (is_int($umurAtauNegara)) {
            // Constructor 3: nama, nim, umur, negara asal
            parent::__construct($nama, $nim, $umurAtauNegara);
            $this->negaraAsal = $negaraAsal ?? "Belum Diisi";
        } else {
            // Constructor 1: tanpa parameter
            parent::__construct($nama, $nim);
            $this->negaraAsal = "Belum Diisi";
        }
    }

    // Getter dan Setter untuk negara asal
    public function getNegaraAsal(): string
    {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void
    {
        $this->negaraAsal = $negaraAsal;
    }

    // Override method tampilkanInfo untuk menampilkan informasi tambahan
    public function tampilkanInfo(): void
    {
        parent::tampilkanInfo(); // Memanggil method tampilkanInfo dari parent
        echo "Negara Asal: " . $this->negaraAsal . PHP_EOL;
    }
}
