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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                   <div class="card-header" style="background: rgb(49,248,133);
background: -moz-linear-gradient(161deg, rgba(49,248,133,0.4257352599242822) 27%, rgba(57,171,207,0.7982842795321253) 80%);
background: -webkit-linear-gradient(161deg, rgba(49,248,133,0.4257352599242822) 27%, rgba(57,171,207,0.7982842795321253) 80%);
background: linear-gradient(161deg, rgba(49,248,133,0.4257352599242822) 27%, rgba(57,171,207,0.7982842795321253) 80%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#31f885",endColorstr="#39abcf",GradientType=1);">
                   <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Pagina Detaillu Aimoruk</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Equipamentus</li>
                            </ol>
                        </div><!-- /.col -->
                    </div>
                   </div><!-- /.row -->

                  
                  
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header bg-primary"><h4>AUMENTA DADUS</h4></div>
                                <div class="card-body">
                                <form method="post" action="Add_detallo_aimoruk.php">
    <div class="mb-3">
        <label for="id_detallu" class="form-label">Id_detaillu</label>
        <input type="text" class="form-control" id="id_detallu" name="id_detallu" placeholder="Masukkan Id_detaillu">
    </div>

    <div class="mb-3">
        <label for="id_aimoruk" class="form-label">id_aimoruk</label>
        
        <select class="form-select" aria-label="Default select example" id="id_aimoruk" name="id_aimoruk">
            <!-- Option dari database t_aimoruk -->
            
            <?php
            // Koneksi ke database (gantilah dengan koneksi sesuai dengan database Anda)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hospital01";

            // Membuat koneksi
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Memeriksa koneksi
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Query untuk mengambil data id_aimoruk dan nama_aimoruk dari tabel t_aimoruk
            $sql = "SELECT id_aimoruk, naran_aimoruk FROM t_aimoruk";
            $result = $conn->query($sql);

            // Menampilkan option dari hasil query
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["id_aimoruk"] . '">' . $row["naran_aimoruk"] . '</option>';
                }
            } else {
                echo '<option value="">Tidak ada data</option>';
            }

            // Menutup koneksi
            $conn->close();
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="tipu_aimoruk" class="form-label">id_Tipu_aimoruk</label>
        <select class="form-select" id="tipu_aimoruk" name="tipu_aimoruk">
            <!-- Option dari database t_tipu_aimoruk -->
            <?php
            // Koneksi ke database (gantilah dengan koneksi sesuai dengan database Anda)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hospital01";

            // Membuat koneksi
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Memeriksa koneksi
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // Query untuk mengambil data id_tipu_aimoruk dan nama_tipu_aimoruk dari tabel t_tipu_aimoruk
            $sql = "SELECT id_tipu_aimoruk, naran_tipu_aimoruk FROM t_tipu_aimoruk";
            $result = $conn->query($sql);

            // Menampilkan option dari hasil query
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["id_tipu_aimoruk"] . '">' . $row["naran_tipu_aimoruk"] . '</option>';
                }
            } else {
                echo '<option value="">Tidak ada data</option>';
            }

            // Menutup koneksi
            $conn->close();
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="stok_aimoruk" class="form-label">Stok_aimoruk</label>
        <input type="text" class="form-control" id="stok_aimoruk" name="stok_aimoruk" placeholder="Masukkan Stok_aimoruk">
    </div>

    <div class="mb-3">
        <label for="obs" class="form-label">Obs</label>
        <input type="text" class="form-control" id="obs" name="obs" placeholder="Masukkan Obs">
    </div>

    <button class="btn btn-primary" name="submit" value="submit">Submit Data</button>
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

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dengan JOIN dari tabel Detallu_aimoruk, t_aimoruk, dan t_tipu_aimoruk
$sql = "SELECT d.id_detallu, a.naran_aimoruk, t.naran_tipu_aimoruk, ABS(d.stok_aimoruk) as stok_aimoruk, d.obs 
        FROM Detallu_aimoruk d 
        INNER JOIN t_aimoruk a ON d.id_aimoruk = a.id_aimoruk 
        INNER JOIN t_tipu_aimoruk t ON d.tipu_aimoruk = t.id_tipu_aimoruk";
$result = $conn->query($sql);

// Memeriksa apakah ada data yang diambil
if ($result->num_rows > 0) {
    // Menampilkan data ke dalam tabel HTML
    echo '<table class="table table-hover table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Nama Aimoruk</th>';
    echo '<th scope="col">Nama Tipu Aimoruk</th>';
    echo '<th scope="col">Stok_aimoruk</th>';
    echo '<th scope="col">Obs</th>';
    echo '<th scope="col">Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["naran_aimoruk"] . '</td>';
        echo '<td>' . $row["naran_tipu_aimoruk"] . '</td>';
        echo '<td>' . $row["stok_aimoruk"] . '</td>';
        echo '<td>' . $row["obs"] . '</td>';
        echo '<td>';
        // Tambahkan tombol edit dan hapus di sini
        echo '<a href="edit_detallu.php?id=' . $row["id_detallu"] . '" class="btn btn-primary btn-sm">Edit</a>';
        echo '<a href="hapus_detallu.php?id=' . $row["id_detallu"] . '" class="btn btn-danger btn-sm">Hapus</a>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo "Tidak ada data yang ditemukan";
}

// Menutup koneksi
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