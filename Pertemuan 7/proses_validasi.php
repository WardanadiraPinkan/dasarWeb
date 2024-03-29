<!DOCTYPE html>
<html>
<head>
  <title>Halaman Selanjutnya</title>
</head>
<body>
  <h1>Data dari Formulir</h1>

  <?php
// Validasi data
if (isset($_POST['nama']) && isset($_POST['email'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $response = array();

    // Lakukan validasi sesuai kebutuhan
    // Misalnya, validasi apakah nama dan email telah diisi
    if (empty($nama)) {
        $response['nama'] = 'Nama harus diisi.';
    } else {
        $response['nama'] = '';
    }

    if (empty($email)) {
        $response['email'] = 'Email harus diisi.';
    } else {
        $response['email'] = '';
    }

    // Jika tidak ada kesalahan validasi
    if (empty($response['nama']) && empty($response['email'])) {
        $response['valid'] = true;
    } else {
        $response['valid'] = false;
    }

    // Mengembalikan respons dalam format JSON
    echo json_encode($response);
} else {
    // Jika tidak ada data yang diterima
    $response['valid'] = false;
    echo json_encode($response);
}
?>

</body>
</html>
