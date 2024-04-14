<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jabatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Jabatan</h5>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">Tambah Jabatan</button>

                        <?php
                        if (isset($_SESSION['flashdata'])) {
                            echo '<div class="alert alert-' . $_SESSION['flashdata']['type'] . '" role="alert">' . $_SESSION['flashdata']['message'] . '</div>';
                            unset($_SESSION['flashdata']);
                        }
                        ?>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM Jabatan ORDER BY id DESC";
                                    $result = mysqli_query($koneksi, $query);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<tr>';
                                            echo '<td>' . $row['id'] . '</td>';
                                            echo '<td>' . $row['Jabatan'] . '</td>';
                                            echo '<td>' . $row['keterangan'] . '</td>';
                                            echo '<td>';
                                            echo '<a href="index.php?page=jabatan/edit&id=' . $row['id'] . '" class="btn btn-warning"><i class="fa fa-pencil-square-alt"></i> Edit</a>';
                                            echo '<a href="index.php?page=jabatan/hapus&id=' . $row['id'] . '" class="btn btn-danger" onclick="javascript:return confirm(\'Hapus Data Jabatan ' . $row['Jabatan'] . '?\')"><i class="fa fa-trash"></i> Hapus</a>';
                                            echo '</td>';
                                            echo '</tr>';
                                        }
                                    } else {
                                        echo '<tr>';
                                        echo '<td colspan="4">Data Jabatan tidak tersedia</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Jabatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="functions/tambah.php?jabatan=tambah" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Jabatan">Nama Jabatan</label>
                            <input type="text" class="form-control" id="Jabatan" name="Jabatan" placeholder="Masukkan Nama Jabatan
