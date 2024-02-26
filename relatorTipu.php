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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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





                    <div class="row">
                        <div class="col-md-12">
                        <!DOCTYPE html>
<html>
<head>
    <title>Print Table</title>
    <style>
        /* CSS untuk mengatur tampilan tabel */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <style>
       

        .container {
            display: flex;
            align-items: center;
            width: 80%;
            max-width: 1000px;
        }

        .image-left {
            margin-right: 90px;
        }

        .image-right {
            margin-left: 90px;
        }

        .text {
            text-align: center;
        }
    </style>
</head>
<body>
 
<div class="container">
        <div class="image-left">
            <img src="assets/img/rdtl.png" alt="" style="width: 80px;">
        </div>
        <div class="text">
            <p> VI Governu Constitucional <br> Ministra da Saude <br> Formatu Relatoriu no Requizasaun Aimoruk no Konsumiveis <br> Ba Fasilidade Saude (SERVISU SUADE MUNICIPIU) </p>
        </div>
        <div class="image-right">
            <img src="assets/img/saude.png" alt="" style="width: 80px;">
        </div>
    </div>

    <table id="myTable">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Observasi</th>
        </tr>
        <?php
        // Koneksi ke database
        $conn = new mysqli("localhost", "root", "", "hospital01");

        // Periksa koneksi
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query untuk mengambil data dari tabel t_tipu_aimoruk
        $sql = "SELECT id_tipu_aimoruk, naran_tipu_aimoruk, obs FROM t_tipu_aimoruk";
        $result = $conn->query($sql);

        // Tampilkan data dalam tabel
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id_tipu_aimoruk"] . "</td><td>" . $row["naran_tipu_aimoruk"] . "</td><td>" . $row["obs"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data available</td></tr>";
        }

        // Tutup koneksi
        $conn->close();
        ?>
    </table>

    <button onclick="printTable()">Print Table</button>

    <script>
    function printTable() {
        var printWindow = window.open('', '_blank');
        printWindow.document.write('<html><head><title>Print Table</title>');
        printWindow.document.write('<style>');
        printWindow.document.write('.container {display: flex; align-items: center; width: 80%; max-width: 1000px;}');
        printWindow.document.write('.image-left {margin-right: 20px;}');
        printWindow.document.write('.image-right {margin-left: 20px;}');
        printWindow.document.write('.text {text-align: center;}');
        printWindow.document.write('table {border-collapse: collapse; width: 100%;}');
        printWindow.document.write('th, td {border: 1px solid black; padding: 8px; text-align: left;}');
        printWindow.document.write('th {background-color: #f2f2f2;}');
        printWindow.document.write('</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write('<div class="container">');
        printWindow.document.write('<div class="image-left">');
        printWindow.document.write('<img src="assets/img/rdtl.png" alt="" style="width: 80px;">');
        printWindow.document.write('</div>');
        printWindow.document.write('<div class="text">');
        printWindow.document.write('<p> VI Governu Constitucional <br> Ministra da Saude <br> Formatu Relatoriu no Requizasaun Aimoruk no Konsumiveis <br> Ba Fasilidade Saude (SERVISU SUADE MUNICIPIU) </p>');
        printWindow.document.write('</div>');
        printWindow.document.write('<div class="image-right">');
        printWindow.document.write('<img src="assets/img/saude.png" alt="" style="width: 80px;">');
        printWindow.document.write('</div>');
        printWindow.document.write('</div>');
        printWindow.document.write('<h1>Table Data</h1>'); // Judul ditambahkan di sini
        printWindow.document.write(document.getElementById('myTable').outerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>


</body>
</html>

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