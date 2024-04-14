<?php
session_start();

if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);

        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Mengubah Jabatan Gagal Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    }

    // Memeriksa apakah terdapat ID pengguna yang diinjeksi
    if (isset($_POST['id']) && !$user_id = antiinjection($koneksi, $_POST['id'])) {
        // Jika tidak ada ID pengguna, tampilkan pesan error
        pesan('danger', 'ID pengguna tidak valid.');
        exit;
    }

    // Memeriksa apakah terdapat data anggota di URL
    if (empty($_GET['anggota'])) {
        // Jika tidak ada data anggota, tampilkan pesan error
        pesan('danger', 'Data anggota tidak ditemukan.');
        exit;
    }

    // Menangkap data anggota dari formulir
    $nama = antiinjection($koneksi, $_POST['nama']);
    $jabatan = antiinjection($koneksi, $_POST['jabatan']);
    $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
    $alamat = antiinjection($koneksi, $_POST['alamat']);
    $no_telp = antiinjection($koneksi, $_POST['no_telp']);
    $username = antiinjection($koneksi, $_POST['username']);

    // Membentuk query untuk memperbarui data anggota
    $query_anggota = "UPDATE anggota SET 
        nama = '$nama',
        jabatan = '$jabatan',
        jenis_kelamin = '$jenis_kelamin',
        alamat = '$alamat',
        no_telp = '$no_telp'
    WHERE user_id = '$user_id'";

    // Memproses query untuk memperbarui data anggota
    if (mysqli_query($koneksi, $query_anggota)) {
        // Jika query berhasil diproses, periksa apakah password diubah
        if (!empty($_POST['password'])) {
            // Jika password diubah, generate salt dan hash password baru
            $password = $_POST['password'];
            $salt = bin2hex(random_bytes(16));
            $combined_password = $salt . $password;
            $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

            // Membentuk query untuk memperbarui password pengguna
            $query_user = "UPDATE user SET 
                username = '$username',
                password = '$hashed_password',
                salt = '$salt'
            WHERE id = '$user_id'";

            // Memproses query untuk memperbarui password pengguna
            if (mysqli_query($koneksi, $query_user)) {
                // Jika query berhasil diproses, tampilkan pesan sukses
                pesan('success', 'Anggota dan password telah diubah.');
            } else {
                // Jika query gagal diproses, tampilkan pesan error
                pesan('warning', 'Data anggota berhasil diubah, tetapi password gagal diubah: ' . mysqli_error($koneksi));
            }
        } else {
            // Jika password tidak diubah, perbarui username pengguna
            $query_user = "UPDATE user SET 
                username = '$username'
            WHERE id = '$user_id'";

            // Memproses query untuk memperbarui username pengguna
            if (mysqli_query($koneksi, $query_user)) {
                // Jika query berhasil diproses, tampilkan pesan sukses
                pesan('success', 'Anggota telah diubah.');
            } else {
                // Jika query gagal diproses, tampilkan pesan error
                pesan('warning', 'Data anggota berhasil diubah, tetapi username gagal diubah: ' . mysqli_error($koneksi));
            }
        }
    } else {
        // Jika query untuk memperbarui data anggota gagal diproses, tampilkan pesan error
        pesan('danger', 'Mengubah anggota gagal: ' . mysqli_error($koneksi));
    }

    // Mengarahkan pengguna ke halaman daftar anggota
    header('Location: ../index.php?page=anggota');
}
?>
