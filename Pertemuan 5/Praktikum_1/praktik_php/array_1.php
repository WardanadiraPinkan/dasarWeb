<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Array Terindeks dengan Perulangan for</h2>
<?php
  $ListDosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

  for ($i = 0; $i < count($ListDosen); $i++) {
    echo $ListDosen[$i] . "<br>";
  }
?>
</body>
</html>
