<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
    $extensions = array("jpg", "jpeg", "png", "gif"); // Hanya jenis file gambar yang diizinkan

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
    }

    if ($file_size > 2097152) { // Batas ukuran 2 MB
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images/" . $file_name); // Mengunggah gambar ke direktori 'images/'
        $file_url = "images/$file_name"; // Mendapatkan URL gambar
        // Menyiapkan respon JSON
        $response = array(
            'success' => true,
            'message' => "File berhasil diunggah.",
            'file_url' => $file_url // Menambahkan URL gambar ke respon
        );
        // Mengirim respon JSON
        echo json_encode($response);
    } else {
        // Menyiapkan respon JSON untuk kesalahan
        $response = array(
            'success' => false,
            'message' => implode("", $errors)
        );
        // Mengirim respon JSON
        echo json_encode($response);
    }
}
?>
