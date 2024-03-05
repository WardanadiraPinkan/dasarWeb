<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil dari $a ditambah $b adalah $hasilTambah. <br>";
echo "Hasil dari $a dikurang $b adalah $hasilKurang. <br>";
echo "Hasil dari $a dikali $b adalah $hasilKali. <br>";
echo "Hasil dari $a dibagi $b adalah $hasilBagi. <br>";
echo "Sisa bagi dari $a dibagi $b adalah $sisaBagi. <br>";
echo "Hasil dari $a pangkat $b adalah $pangkat. <br>";

echo "<br>";
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama dengan dari $a dan $b adalah $hasilSama. <br>";
echo "Hasil sama dengan tidak sama dari $a dan $b adalah $hasilTidakSama. <br>";
echo "Hasil lebih kecil dari $a dan $b adalah $hasilLebihKecil. <br>";
echo "Hasil lebih besar dari $a dan $b adalah $hasilLebihBesar. <br>";
echo "Hasil lebih kecil sama dengan dari $a kurang dari $b adalah $hasilLebihKecilSama. <br>";
echo "Hasil lebih besar sama dengan dari $a lebih dari $b adalah $hasilLebihBesarSama. <br>";

echo "<br>";
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND dari $a dan $b adalah $hasilAnd. <br>";
echo "Hasil OR dari $a dan $b adalah $hasilOr. <br>";
echo "Hasil NotA dari $a dan $b adalah $hasilNotA. <br>";
echo "Hasil NotB dari $a dan $b adalah $hasilNotB. <br>";

echo "<br>";
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Hasil dari nilai A adalah 10 <br>";
echo "Hasil dari 10 ditambah $b adalah $hasilTambah <br>";
echo "Hasil dari 10 dikurangi $b adalah $hasilKurang <br>";
echo "Hasil dari 10 dikali $b adalah $hasilKali <br>";
echo "Hasil dari 10 dibagi $b adalah $hasilBagi <br>";
echo "Hasil dari 10 modulus $b adalah $sisaBagi <br>";

echo "<br>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik adalah $hasilIdentik <br>";
echo "Hasil Tidak Identik adalah $hasilTidakIdentik <br>";

// Restoran
echo "<br>";
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi: " . $totalKursi . "<br>";
echo "Kursi terisi: " . $kursiTerisi . "<br>";
echo "Kursi kosong: " . $kursiKosong . "<br>";
echo "Persentase kursi kosong: " . number_format($persenKosong, 2) . "%<br>";
?>
