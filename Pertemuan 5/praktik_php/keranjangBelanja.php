<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1>Keranjang Belanja</h1>

<?php
// Periksa apakah cookie diatur sebelum mencoba mengakses nilainya
$beliNovel = isset($_COOKIE["beliNovel"]) ? $_COOKIE["beliNovel"] : 0;
$beliBuku = isset($_COOKIE["beliBuku"]) ? $_COOKIE["beliBuku"] : 0;

echo "Jumlah Novel: " . $beliNovel . "<br>";
echo "Jumlah Buku: " . $beliBuku . "<br>";

?>

</body>
</html>
