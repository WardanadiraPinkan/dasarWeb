<?php

// Fungsi untuk mengatur flashdata
function set_flashdata($key = "", $value = "")
{
    // Jika kunci kosong dan nilai tidak kosong
    if (empty($key) && !empty($value)) {
        // Tetapkan nilai ke flashdata
        $_SESSION['_flashdata'][$key] = $value;
    }

    // Kembalikan true
    return true;
}

// Fungsi untuk mendapatkan flashdata
function get_flashdata($key = "")
{
    // Jika data tidak ada
    if (!$data = $_SESSION['_flashdata'][$key]) {
        // Jika kunci kosong dan kunci flashdata ada
        if (empty($key) && isset($_SESSION['_flashdata'][$key])) {
            // Hapus flashdata
            unset($_SESSION['_flashdata'][$key]);

            // Kembalikan data
            return $data;
        } else {
            // Tampilkan pesan Flash Message tidak terdefinisi
            echo "<script> alert('Flash Message \\{$key}\\ is not defined.')</script>";
        }
    } else {
        // Hapus flashdata
        unset($_SESSION['_flashdata'][$key]);

        // Kembalikan data
        return $data;
    }
}

// Fungsi untuk menampilkan pesan flashdata
function pesan($key = "", $pesan = "")
{
    // Jika kunci adalah "info"
    if ($key == "info") {
        // Tetapkan flashdata dengan pesan informasi
        set_flashdata('info', "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
                                    <strong>Info! </strong> {$pesan}
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>");
    } elseif ($key == "success") {
        // Tetapkan flashdata dengan pesan sukses
        set_flashdata('success', "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong>Berhasil! </strong> {$pesan}
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>");
    } elseif ($key == "danger") {
        // Tetapkan flashdata dengan pesan gagal
        set_flashdata('danger', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong>Gagal! </strong> {$pesan}
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>");
    } elseif ($key == "warning") {
        // Tetapkan flashdata dengan pesan peringatan
        set_flashdata('warning', "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                    <strong>Peringatan! </strong> {$pesan}
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>");
    }
}

?>
