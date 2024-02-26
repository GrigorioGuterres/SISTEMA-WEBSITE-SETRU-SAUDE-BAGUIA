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
                    <div class="card-header bg-light shadow-lg">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Pagina Tipu Aimoruk</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Tipu Aimoruk</li>
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
                                <div class="card-header bg-primary">AUMENTA DADUS</div>
                                <div class="card-body">
                                    <form method="post" action="add_data_tipu_aimoruk.php">
                                        <div class="mb-3">
                                            <label for="id_tipu_aimoruk" class="form-label">ID Tipu Aimoruk</label>
                                            <input type="text" class="form-control" id="id_tipu_aimoruk" name="id_tipu_aimoruk" placeholder="Masukkan ID Tipu Aimoruk">
                                        </div>
                                        <div class="mb-3">
                                            <label for="naran_tipu_aimoruk" class="form-label">Naran Tipu Aimoruk</label>
                                            <input type="text" class="form-control" id="naran_tipu_aimoruk" name="naran_tipu_aimoruk" placeholder="Masukkan Naran Tipu Aimoruk">
                                        </div>
                                        <div class="mb-3">
                                            <label for="obs" class="form-label">Obs</label>
                                            <textarea class="form-control" id="obs" name="obs" placeholder="Masukkan Obs"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Data</button>
                                    </form>

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-8">
                            <div class="card-header bg-primary">Lista Dadus</div>
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

                                // Query untuk mengambil data dari tabel t_tipu_aimoruk
                                $sql = "SELECT id_tipu_aimoruk, naran_tipu_aimoruk, obs FROM t_tipu_aimoruk";
                                $result = $conn->query($sql);

                                ?>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">id_tipu_aimoruk</th>
                                            <th scope="col">Naran_tipu_aimoruk</th>
                                            <th scope="col">Obs</th>
                                            <th scope="col">Aciton</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($result->num_rows > 0) {
                                            // Output data dari setiap baris
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<th scope='row'>" . $row["id_tipu_aimoruk"] . "</th>";
                                                echo "<td>" . $row["naran_tipu_aimoruk"] . "</td>";
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