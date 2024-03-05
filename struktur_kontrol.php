<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";
// Mendefinisikan variabel
$jumlahLahan = 10; // Jumlah lahan yang akan dipanen
$tanamanPerLahan = 5; // Jumlah tanaman di setiap lahan
$buahPerTanaman = 10; // Jumlah buah di setiap tanaman
$jumlahBuah = 0; // Total buah yang akan dipanen

// Menghitung total buah
for ($i = 1; $i <= $jumlahLahan; $i++) {
  $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman); // Menambahkan hasil perkalian tanaman dan buah di setiap lahan
}

// Mencetak total buah
echo "Jumlah buah yang akan dipanen adalah " . $jumlahBuah . "<br>";

echo "<br>";
// Mendefinisikan variabel
$skorUjian = [85, 92, 78, 96, 88]; // Array berisi nilai skor ujian
$totalSkor = 0; // Total skor ujian

// Menghitung total skor
foreach ($skorUjian as $skor) {
  // Menambahkan nilai skor ke total skor
  $totalSkor += $skor;
}

// Menghitung rata-rata skor
$rataRata = $totalSkor / count($skorUjian); // Membagi total skor dengan jumlah skor ujian

// Mencetak total dan rata-rata skor
echo "Total skor ujian adalah: $totalSkor" . "<br>";
echo "Rata-rata skor ujian adalah: $rataRata";

echo "<br>";
// Mendefinisikan variabel
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96]; // Array berisi nilai siswa

// Menampilkan nilai dan keterangan lulus/tidak lulus
foreach ($nilaiSiswa as $nilai) {
  // Menentukan keterangan lulus/tidak lulus
  if ($nilai < 60) {
    $keterangan = "Tidak lulus";
  } else {
    $keterangan = "Lulus";
  }

  // Menampilkan nilai dan keterangan
  echo "Nilai: $nilai ($keterangan) <br>";
}

// Menghitung dan menampilkan rata-rata nilai
$rataRata = array_sum($nilaiSiswa) / count($nilaiSiswa);
echo "<br>Rata-rata nilai: $rataRata";

// SOAL CERITA PRAK 4 NO 21 Daftar nilai siswa
$nilai = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

// Urutkan nilai dari yang terendah ke tertinggi
sort($nilai);

// Hitung jumlah nilai yang akan digunakan
$jumlahNilai = count($nilai) - 4;

// Hitung total nilai
$totalNilai = 0;
for ($i = 2; $i < $jumlahNilai + 2; $i++) {
  $totalNilai += $nilai[$i];
}

// Hitung nilai rata-rata
$rataRata = $totalNilai / $jumlahNilai;

// Tampilkan hasil
echo "Total nilai: " . $totalNilai . "<br>";
echo "Nilai rata-rata: " . $rataRata . "<br>";

// SOAL CERITA PRAK 4 NO 23 Harga produk
$harga = 120000;

// Diskon
$diskon = 20;

// Hitung harga setelah diskon
$hargaSetelahDiskon = $harga - ($harga * $diskon / 100);

// Tampilkan hasil
echo "Harga sebelum diskon: Rp" . number_format($harga) . "<br>";
echo "Diskon: " . $diskon . "%<br>";
echo "Harga setelah diskon: Rp" . number_format($hargaSetelahDiskon) . "<br>";

echo "<br>";
// SOAL CERITA PRAK 4 NO 25 Poin yang dikumpulkan pemain
$poin = 600;

// Hitung total skor
$totalSkor = $poin;

// Periksa apakah pemain mendapatkan hadiah tambahan
if ($poin > 500) {
  $hadiahTambahan = "YA";
} else {
  $hadiahTambahan = "TIDAK";
}

// Tampilkan hasil
echo "Total skor pemain adalah: " . $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan . "<br>";
?>