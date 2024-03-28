<?php
$myArray = array(); // Array kosong

// Mengecek apakah array kosong
if (empty($myArray)) {
  echo "Array tidak terdefinisi atau kosong.";
  echo "<br>"; // Menambahkan baris baru
} else {
  echo "Array terdefinisi dan tidak kosong.";
  echo "<br>"; // Menambahkan baris baru
}

// Mengecek apakah variabel tidak terdefinisi
if (empty($nonExistentVar)) {
  echo "Variabel tidak terdefinisi atau kosong.";
  echo "<br>"; // Menambahkan baris baru
} else {
  echo "Variabel terdefinisi dan tidak kosong.";
  echo "<br>"; // Menambahkan baris baru
}
?>
