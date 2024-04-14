<?php

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['level']) || empty($_POST['jabatan']) || empty($_POST['nama']) || empty($_POST['jenis_kelamin']) || empty($_POST['alamat']) || empty($_POST['no_telp'])) {
        pesan('danger', 'Semua kolom harus diisi.');
    } else {
        $username = antiinjection($koneksi, $_POST['username']);
        $password = antiinjection($koneksi, $_POST['password']);
        $level = antiinjection($koneksi, $_POST['level']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);

        $nama = antiinjection($koneksi, $_POST['nama']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);

        $salt = bin2hex(random_bytes(16));
        $combined_password = $salt . $password;

        $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

        $query = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt', '$level')";

        if (mysqli_query($koneksi, $query)) {
            $last_id = mysqli_insert_id($koneksi);

            $query2 = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id', '$jabatan')";

            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Baru Ditambahkan.");
            } else {
                pesan('warning', "Gagal Menambahkan Anggota Tetapi Data Login Tersimpan Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Gagal Menambahkan Anggota Karena: " . mysqli_error($koneksi));
        }

        header("Location: ../index.php?page=anggota");
    }
}

?>
