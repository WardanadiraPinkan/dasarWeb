<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Contoh Formulir</title>
</head>
<body>
  <h1>Contoh Formulir</h1>
  <form method="post">
    <label for="input">Input:</label>
    <input type="text" name="input" id="input">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <br>
    <button type="submit">Kirim</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Input Validation and Sanitization
    $input = $_POST['input'];
    $email = $_POST['email'];

    if (empty($input)) {
      echo "Masukan tidak boleh kosong.";
    } elseif (strlen($input) > 255) {
      echo "Masukan panjangnya tidak boleh lebih dari 255 karakter.";
    } else {
      $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
      echo "Your input: " . $input;
    }

    // Email Validation
    if (empty($email)) {
      echo "Email tidak boleh kosong.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email tidak valid.";
    } else {
      echo "Email valid.";
    }
  }
  ?>
</body>
</html>
