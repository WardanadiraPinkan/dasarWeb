<?php

// Mendefinisikan kelas Anggota
class Anggota {
    // Properti untuk menyimpan nama anggota
    private $nama;

    // Properti untuk menyimpan jabatan anggota
    private $jabatan;

    // Properti untuk menyimpan tanggal bergabung
    private $tanggal_bergabung;

    // Metode untuk mengatur nama anggota
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nama anggota
    public function getNama() {
        return $this->nama;
    }

    // Metode untuk mengatur jabatan anggota
    public function setJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }

    // Metode untuk mendapatkan jabatan anggota
    public function getJabatan() {
        return $this->jabatan;
    }

    // Metode untuk mengatur tanggal bergabung
    public function setTanggalBergabung($tanggal_bergabung) {
        $this->tanggal_bergabung = $tanggal_bergabung;
    }

    // Metode untuk mendapatkan tanggal bergabung
    public function getTanggalBergabung() {
        return $this->tanggal_bergabung;
    }
}

// Menciptakan objek Anggota baru
$anggota = new Anggota();

// Mengatur nama anggota
$anggota->setNama("Brow Jants");

// Mengatur jabatan anggota
$anggota->setJabatan("P11th");

// Mengatur tanggal bergabung
$anggota->setTanggalBergabung("1921-01-01");

// Menampilkan informasi anggota
echo "Nama: " . $anggota->getNama() . "<br>";
echo "Jabatan: " . $anggota->getJabatan() . "<br>";
echo "Tanggal Bergabung: " . $anggota->getTanggalBergabung() . "<br>";

?>
