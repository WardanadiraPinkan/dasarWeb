<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan dokumen
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($documentType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
    } else {
        echo "Gagal mengunggah dokumen.";
    }
} else {
    echo"Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
}
}
?>
