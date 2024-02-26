<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include 'include/navbar.php' ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'include/sidebar.php' ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                   <div class="card-header shadow-lg" style="background: rgb(49,248,133);
background: -moz-linear-gradient(161deg, rgba(49,248,133,0.4257352599242822) 27%, rgba(57,171,207,0.7982842795321253) 80%);
background: -webkit-linear-gradient(161deg, rgba(49,248,133,0.4257352599242822) 27%, rgba(57,171,207,0.7982842795321253) 80%);
background: linear-gradient(161deg, rgba(49,248,133,0.4257352599242822) 27%, rgba(57,171,207,0.7982842795321253) 80%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#31f885",endColorstr="#39abcf",GradientType=1);">
                   <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Pagina Dadus Aimoruk</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Equipamentus</li>
                            </ol>
                        </div><!-- /.col -->
                    </div>
                   </div><!-- /.row -->

                  
                   <?php
// Mengecek apakah ada pesan sukses yang dikirim dari add_data_aimoruk.php
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    echo '<div id="successAlert" class="alert alert-success" role="alert">';
    echo 'DADUS AUMENTA SUSSESU ONA .';
    echo '</div>';
}
?>

<script>
// Menghilangkan pesan alert setelah 5 detik
setTimeout(function() {
    document.getElementById('successAlert').style.display = 'none';
}, 2000);
</script>

                    <div class="row">
                        
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header bg-primary"><h4>AUMENTA DADUS</h4></div>
                                <div class="card-body">
                                <form method="post" action="add_data_aimoruk.php">
    <div class="mb-3">
        <label for="id_aimoruk" class="form-label">id Aimoruk</label>
        <input type="text" class="form-control" id="id_aimoruk" name="id_aimoruk" placeholder="Masukkan id Aimoruk">
    </div>
    <div class="mb-3">
        <label for="naran_aimoruk" class="form-label">Naran Aimoruk</label>
        <input type="text" class="form-control" id="naran_aimoruk" name="naran_aimoruk" placeholder="Masukkan Naran Aimoruk">
    </div>
    <div class="mb-3">
        <label for="obs" class="form-label">Obs</label>
        <input type="text" class="form-control" id="obs" name="obs" placeholder="Masukkan Obs">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit Data</button>
</form>

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-8">
                            <div class="card-header bg-primary"><h4>LISTA DADUS</h4></div>
                            <div class="card-body">
                            <?php
// Koneksi ke database (gantilah dengan koneksi sesuai dengan database Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital01";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel t_aimoruk
$sql = "SELECT id_aimoruk, naran_aimoruk, obs FROM t_aimoruk";
$result = $conn->query($sql);

?><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .table-responsive {
        overflow-x: auto;
    }
</style>
</head>
<body>

<div class="container mt-3">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">id_aimoruk</th>
                    <th scope="col">Naran_aimoruk</th>
                    <th scope="col">obs</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data dari setiap baris
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $row["id_aimoruk"] . "</th>";
                        echo "<td>" . $row["naran_aimoruk"] . "</td>";
                        echo "<td>" . $row["obs"] . "</td>";
                        echo "<td>";
                        echo "<a href='' class='btn btn-primary btn-sm'>Edit</a> ";
                        echo "<a href='' class='btn btn-danger btn-sm'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>


<?php
// Tutup koneksi
$conn->close();
?>

                            </div>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->
        <?php include 'include/footer.php' ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>