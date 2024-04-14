<?php
date_default_timezone_set("Asia/Jakarta");
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

if (mysqli_connect-error()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}