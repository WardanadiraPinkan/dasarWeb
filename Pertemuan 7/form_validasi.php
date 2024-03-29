<!DOCTYPE html>
<html>
<head>
  <title>Form Input dengan Validasi</title>
  <!-- Sertakan link ke jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h1>Form Input dengan Validasi</h1>
  <form method="post" action="proses_validasi.php" id="myForm">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>

    <input type="submit" value="Submit">
</form>


  <script>
    $(document).ready(function() {
      $("#myForm").submit(function(event) {
        var nama = $("#nama").val();
        var email = $("#email").val();
        var valid = true;

        // Validasi nama
        if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                return false; // Hentikan pengiriman form
            } else {
                $("#nama-error").text(""); // Bersihkan pesan error jika valid
            }
            
            // Validasi email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                return false; // Hentikan pengiriman form
            } else {
                $("#email-error").text(""); // Bersihkan pesan error jika valid
            }
            
            // Validasi password
            if (password === "") {
                $("#password-error").text("Password harus diisi.");
                return false; // Hentikan pengiriman form
            } else if (password.length < 8) {
                $("#password-error").text("Password harus minimal 8 karakter.");
                return false; // Hentikan pengiriman form
            } else {
                $("#password-error").text(""); // Bersihkan pesan error jika valid
            }
            
            // Jika semua validasi berhasil, kirim form
            this.submit();
        });
    });
  </script>
</body>
</html>
