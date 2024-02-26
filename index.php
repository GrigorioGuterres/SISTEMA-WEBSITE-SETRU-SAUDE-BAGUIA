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
  <?php include 'include/navbar.php'?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'include/sidebar.php'?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- INFO RUMA BELE AUMENTA IHA NEE  -->


        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

              <div class="info-box-content">
    <span class="info-box-text">TATAL DADUS AIMORUK</span>
    <span class="info-box-number">
        <?php
        // Koneksi ke database
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

        // Query untuk menghitung jumlah baris dalam tabel t_aimoruk
        $sql = "SELECT COUNT(*) AS jumlah_aimoruk FROM t_aimoruk";
        $result = $conn->query($sql);

        // Menampilkan jumlah baris
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row["jumlah_aimoruk"];
            }
        } else {
            echo "Tidak ada data";
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </span>
</div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

              <div class="info-box-content">
    <span class="info-box-text">TATAL DADUS DETALHO </span>
    <span class="info-box-number">
        <?php
        // Koneksi ke database
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

        // Query untuk menghitung jumlah baris dalam tabel detallu_aimoruk
        $sql = "SELECT COUNT(*) AS jumlah_detallu_aimoruk FROM detallu_aimoruk";
        $result = $conn->query($sql);

        // Menampilkan jumlah baris
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row["jumlah_detallu_aimoruk"];
            }
        } else {
            echo "Tidak ada data";
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </span>
</div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

              <div class="info-box-content">
    <span class="info-box-text">TOTAL TIPU AIMORUK</span>
    <span class="info-box-number">
        <?php
        // Koneksi ke database
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

        // Query untuk menghitung jumlah baris dalam tabel t_tipu_aimoruk
        $sql = "SELECT COUNT(*) AS jumlah_t_tipu_aimoruk FROM t_tipu_aimoruk";
        $result = $conn->query($sql);

        // Menampilkan jumlah baris
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row["jumlah_t_tipu_aimoruk"];
            }
        } else {
            echo "Tidak ada data";
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </span>
</div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="fas fa-comments"></i></span>

              <div class="info-box-content">
    <span class="info-box-text">TOTAL DADUS KLNIKA</span>
    <span class="info-box-number">
        <?php
        // Koneksi ke database
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

        // Query untuk menghitung jumlah baris dalam tabel t_klinika
        $sql = "SELECT COUNT(*) AS jumlah_t_klinika FROM t_klinika";
        $result = $conn->query($sql);

        // Menampilkan jumlah baris
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row["jumlah_t_klinika"];
            }
        } else {
            echo "Tidak ada data";
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </span>
</div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

              <div class="info-box-content">
    <span class="info-box-text">TOTAL DADUS STAFF</span>
    <span class="info-box-number">
        <?php
        // Koneksi ke database
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

        // Query untuk menghitung jumlah baris dalam tabel t_staf
        $sql = "SELECT COUNT(*) AS jumlah_t_staf FROM t_staf";
        $result = $conn->query($sql);

        // Menampilkan jumlah baris
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row["jumlah_t_staf"];
            }
        } else {
            echo "Tidak ada data";
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </span>
</div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
          
          <!-- /.col -->
          
          <!-- /.col -->
        </div>

        <div class="row">
          <div class="col-sm-12">
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <?php
// Koneksi ke database
$mysqli = new mysqli("localhost", "root", "", "hospital01");

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query untuk mengambil data dari tabel detallu_aimoruk
$sql = "SELECT naran_aimoruk, stok_aimoruk FROM detallu_aimoruk INNER JOIN t_aimoruk ON detallu_aimoruk.id_aimoruk = t_aimoruk.id_aimoruk";
$result = $mysqli->query($sql);

// Inisialisasi array untuk menyimpan data dan label
$labels = [];
$data = [];

// Periksa apakah ada hasil dari query
if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while ($row = $result->fetch_assoc()) {
        // Tambahkan label dan data ke array
        $labels[] = $row["naran_aimoruk"];
        $data[] = $row["stok_aimoruk"];
    }
} else {
    echo "<div class='alert alert-primary' role='alert'>
    DADUS STOK AIMORUK LAIHA !
  </div>";
}

// Tutup koneksi ke database
$mysqli->close();
?>
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">GRAFIC STOK AIMORUK</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
              <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 390px; max-width: 100%;"></canvas>

              </div>
              <!-- /.card-body -->
            </div>

  

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    label: 'Stok Aimoruk',
                    data: <?php echo json_encode($data); ?>,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'include/footer.php'?>

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
