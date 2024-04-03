<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Periksa apakah ada file yang diunggah
if ($_FILES['files']['name'][0]) {
    // Hitung total file yang diunggah
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        // Dapatkan nama file
        $fileName = $_FILES['files']['name'][$i];
        
        // Dapatkan tipe file
        $fileType = $_FILES['files']['type'][$i];

        // Buat lokasi file tujuan
        $targetFile = $targetDirectory . $fileName;

        // Pindahkan file yang diunggah ke direktori penyimpanan jika itu adalah gambar
        if (strpos($fileType, 'image') !== false && move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            // Tampilkan pesan sukses
            echo "File $fileName berhasil diunggah.<br>";
            // Tampilkan gambar yang diunggah
            echo "<img src='$targetFile' alt='Uploaded Image' style='max-width: 300px;'><br>";
        } else {
            // Tampilkan pesan gagal jika bukan gambar
            echo "Gagal mengunggah file $fileName. Pastikan Anda hanya mengunggah gambar.<br>";
        }
    }
} else {
    // Tampilkan pesan jika tidak ada file yang diunggah
    echo "Tidak ada file yang diunggah.";
}
?>
