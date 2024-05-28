<?php 
  $menu = 'kategori'; 
  include_once('model/kategori_model.php');

  $status = isset($_GET['status']) ? strtolower($_GET['status']) : null;
  $message = isset($_GET['message']) ? strtolower($_GET['message']) : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kategori</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once('layouts/header.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('layouts/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kategori</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kategori Soal</h3>
          <div class="card-tools">
            <a href="kategori_form.php?act=tambah" class="btn btn-sm btn-primary">Tambah Kategori</a>
          </div>
        </div>
        <div class="card-body">
          
          <?php 
            if($status == 'sukses'){
                echo '<div class="alert alert-success">
                      '.$message.'
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }
          ?>  

          <table class="table table-sm table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Kategori ID</th>
                <th>Kategori Soal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $kategori = new kategori();
                $list = $kategori->getData();

                $i = 1;
                while($row = $list->fetch_assoc()){
                  echo '<tr>
                      <td>' . $i . '</td>
                      <td>'.$row['kategori_id'].'</td>
                      <td>'.$row['kategori_nama'].'</td>
                      <td>
                        <a title="Edit Kategori" href="kategori_form.php?act=edit&id='.$row['kategori_id'].'" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm(\'Apakah anda yakin menghapus data ini?\')" title="Hapus Data" href="kategori_action.php?act=hapus&id='.$row['kategori_id'].'" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>';

                    $i++;
                }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <?php 
        $act = isset($_GET['act']) ? $_GET['act'] : '';
        if($act == 'tambah'){
      ?>

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Kategori</h3>
        </div>
        <div class="card-body">
          <form action="kategori_action.php?act=simpan" method="post" id="form-tambah">
            <div class="form-group">
              <label for="kategori_nama">Nama Kategori</label>
              <select required name="kategori_nama" id="kategori_nama" class="form-control">
                <option value="">Pilih Jenis Kategori</option>
                <option value="Biodata">Biodata</option>
                <option value="Survey Soal">Soal Survey</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
              <a href="kategori.php" class="btn btn-warning">Kembali</a>
            </div>
          </form>
        </div>
      </div>

      <?php } ?>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once('layouts/footer.php'); ?>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<script src="plugins/jquery-validation/localization/messages_id.min.js"></script>

<script>
  $(document).ready(function(){
    $('#form-tambah').validate({
      rules: {
        kategori_nama: {
          required: true,
          maxlength: 255
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>

</body>
</html>
