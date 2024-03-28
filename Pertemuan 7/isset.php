<?php
// Deklarasi variabel
$umur;

// Mengecek apakah variabel 'umur' terdefinisi dan nilainya lebih besar dari atau sama dengan 18
if (isset($umur) && $umur >= 18) {
  // Menampilkan pesan "Anda sudah dewasa."
  echo "Anda sudah dewasa.";
  echo "<br>";
} else {
  // Menampilkan pesan "Anda belum dewasa atau variabel 'umur' tidak ditemukan."
  echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
  echo "<br>";
}

// Deklarasi array
$data = array("nama" => "Jane", "usia" => 25);

// Mengecek apakah variabel 'nama' terdefinisi dalam array
if (isset($data["nama"])) {
  // Menampilkan pesan "Nama: " diikuti dengan nilai variabel 'nama'
  echo "Nama: " . $data["nama"];
  echo "<br>";
} else {
  // Menampilkan pesan "Variabel 'nama' tidak ditemukan dalam array."
  echo "Variabel 'nama' tidak ditemukan dalam array.";
  echo "<br>";
}
?>
