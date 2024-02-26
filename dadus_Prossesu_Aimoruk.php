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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
                                <div class="card-header bg-primary"><h4>AUMENTA DADUS AIMORUK</h4></div>
                                <div class="card-body">
                                    <form method="post" action="add_Prossesu_aimoruk.php">

                                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="id_detallu_aimoruk" class="form-label">Id Detallu Aimoruk</label>
                                                    <select class="form-select" id="id_detallu_aimoruk" name="id_detallu_aimoruk">
                                                        <option selected="selected" value="">Hili Dadus Detallu Aimoruk</option>
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

                                                        // Query untuk mengambil data dari tabel Detallu_aimoruk dengan JOIN untuk mendapatkan nama bukan ID
                                                        $sql = "SELECT d.id_detallu, a.naran_aimoruk, t.naran_tipu_aimoruk
                FROM Detallu_aimoruk d
                JOIN t_aimoruk a ON d.id_aimoruk = a.id_aimoruk
                JOIN t_tipu_aimoruk t ON d.tipu_aimoruk = t.id_tipu_aimoruk";
                                                        $result = $conn->query($sql);

                                                        // Menampilkan data dalam bentuk option
                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo '<option value="' . $row["id_detallu"] . '">' . $row["naran_aimoruk"] . ' - ' . $row["naran_tipu_aimoruk"] . '</option>';
                                                            }
                                                        } else {
                                                            echo '<option value="">Tidak ada data</option>';
                                                        }

                                                        // Menutup koneksi
                                                        $conn->close();
                                                        ?>
                                                    </select>
                                                </div>

                                            </div>


                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="stok_atual" class="form-label">Stok Atual</label>
                                                    <input type="text" class="form-control" id="stok_atual" name="stok_atual" placeholder="Stok Atual" readonly>
                                                </div>

                                                <script>
                                                    document.getElementById('id_detallu_aimoruk').addEventListener('change', function() {
                                                        var idDetalluAimoruk = this.value;

                                                        // Lakukan panggilan AJAX untuk mengambil stok aktual berdasarkan id_detallu_aimoruk yang dipilih
                                                        var xhr = new XMLHttpRequest();
                                                        xhr.onreadystatechange = function() {
                                                            if (this.readyState == 4 && this.status == 200) {
                                                                // Mengisi nilai stok_atual dengan respons yang diterima dari server
                                                                document.getElementById('stok_atual').value = this.responseText;
                                                            }
                                                        };
                                                        xhr.open("GET", "get_stok_atual.php?id_detallu=" + idDetalluAimoruk, true);
                                                        xhr.send();
                                                    });
                                                </script>
                                            </div>
                                        </div>





                                        <div class="row">
                                            <div class="col-6">
                                            <div class="mb-3">
                                            <label for="kuantidade" class="form-label">Kuantidade</label>
                                            <input type="number" class="form-control" id="kuantidade" name="kuantidade" placeholder="Prense Kuantidade">
                                        </div>
                                            </div>

                                            <div class="col-6">
                                            <div class="mb-3">
                                            <label for="sisa_stok" class="form-label">Sisa Stok</label>
                                            <input type="text" class="form-control" id="sisa_stok" name="sisa_stok" placeholder="Sisa Stok" readonly>
                                        </div>

                                        <script>
                                            document.getElementById('kuantidade').addEventListener('input', function() {
                                                var kuantidade = parseFloat(this.value); // Menggunakan parseFloat untuk mendapatkan nilai desimal
                                                var stokAtual = parseFloat(document.getElementById('stok_atual').value);

                                                // Menghitung sisa stok
                                                var sisaStok = stokAtual - kuantidade; // Mengurangkan nilai kuantitas dari stok aktual

                                                // Menampilkan nilai sisa stok
                                                document.getElementById('sisa_stok').value = sisaStok;
                                            });
                                        </script>
                                            </div>
                                        </div>

                                       

                                        <div class="mb-3">
                                            <label for="id_staf" class="form-label">Dadus Staf</label>
                                            <select class="form-select" id="id_staf" name="id_staf">
                                                <option value="">Hili Dadus Staf</option>
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

                                                // Query untuk mengambil data dari tabel t_staf
                                                $sql = "SELECT id_staf, naran_staf FROM t_staf";
                                                $result = $conn->query($sql);

                                                // Menampilkan pilihan staf
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="' . $row["id_staf"] . '">' . $row["naran_staf"] . '</option>';
                                                    }
                                                } else {
                                                    echo '<option value="">Tidak ada data staf</option>';
                                                }

                                                // Menutup koneksi
                                                $conn->close();
                                                ?>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="id_klinika" class="form-label">Dadus Klinika</label>
                                            <select class="form-select" id="id_klinika" name="id_klinika">
                                                <option value="">Hili Dadus Klinika</option>
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

                                                // Query untuk mengambil data dari tabel t_klinika
                                                $sql = "SELECT id_klinika, naran_klinika FROM t_klinika";
                                                $result = $conn->query($sql);

                                                // Menampilkan pilihan klinika
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="' . $row["id_klinika"] . '">' . $row["naran_klinika"] . '</option>';
                                                    }
                                                } else {
                                                    echo '<option value="">Tidak ada data klinika</option>';
                                                }

                                                // Menutup koneksi
                                                $conn->close();
                                                ?>
                                            </select>
                                        </div>



                                        <div class="mb-3">
                                            <label for="data_prosesu" class="form-label">Data Prosesu</label>
                                            <input type="date" class="form-control" id="data_prosesu" name="data_prosesu" placeholder="Data Prosesu">
                                        </div>



                                        <div class="mb-3">
                                            <label for="obs" class="form-label">Obs</label>
                                            <input type="text" class="form-control" id="obs" name="obs" placeholder="Obs">
                                        </div>

                                        <button type="submit" class="btn btn-primary" name="submit">Submit Data</button>
                                    </form>

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-8">
                            <div class="card-header bg-info"><h4>LISTA DADUS AIMORUK</h4></div>
                            <div class="card-body">
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

                                // Query untuk mengambil data dari tabel t_prosesu_aimoruk dengan JOIN untuk mendapatkan nama bukan ID
                                $sql = "SELECT p.id_prosesu_aimoruk, s.naran_staf, a.naran_aimoruk, t.naran_tipu_aimoruk, p.kuantidade, k.naran_klinika, p.data_prosesu, p.obs, ABS(p.sisa_stok) as sisa_stok, ABS(p.stok_atual) as stok_atual
        FROM t_prosesu_aimoruk p
        JOIN t_staf s ON p.id_staf = s.id_staf
        JOIN Detallu_aimoruk d ON p.id_detallu = d.id_detallu
        JOIN t_aimoruk a ON d.id_aimoruk = a.id_aimoruk
        JOIN t_tipu_aimoruk t ON d.tipu_aimoruk = t.id_tipu_aimoruk
        JOIN t_klinika k ON p.id_klinika = k.id_klinika";
                                $result = $conn->query($sql);

                                // Memeriksa apakah query berhasil dieksekusi
                                if ($result === false) {
                                    die("Error executing the query: " . $conn->error);
                                }
                                ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .table-responsive {
        overflow-x: auto;
    }
</style>

<div class="table-responsive">
        <table class="table table-bordered">

                                    
                                        <thead>
                                            <tr>
                                                <th scope="col">ID Prosesu Aimoruk</th>
                                                <th scope="col">Nama Staf</th>
                                                <th scope="col">Nama Aimoruk</th>
                                                <th scope="col">Tipe Aimoruk</th>
                                                <th scope="col">Kuantidade</th>
                                                <th scope="col">Nama Klinika</th>
                                                <th scope="col">Data Prosesu</th>
                                                <th scope="col">Obs</th>
                                                <th scope="col">Sisa Stok</th>
                                                <th scope="col">Stok Atual</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Menampilkan data dalam bentuk baris tabel
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row["id_prosesu_aimoruk"] . "</td>";
                                                    echo "<td>" . $row["naran_staf"] . "</td>";
                                                    echo "<td>" . $row["naran_aimoruk"] . "</td>";
                                                    echo "<td>" . $row["naran_tipu_aimoruk"] . "</td>";
                                                    echo "<td >" . $row["kuantidade"] . "</td>";
                                                    echo "<td>" . $row["naran_klinika"] . "</td>";
                                                    echo "<td>" . $row["data_prosesu"] . "</td>";
                                                    echo "<td>" . $row["obs"] . "</td>";
                                                    echo "<td>     <span class='badge rounded-pill bg-success'>
                                                    " . $row["sisa_stok"] . "</span></td>";
                                                    echo "<td>     <span class='badge rounded-pill bg-primary'>
                                                    " . $row["stok_atual"] . "</span></td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo '<tr><td colspan="10">Tidak ada data</td></tr>';
                                            }
                                            ?>
                                        </tbody>
                                        </table>
    </div>
                                </body>

                                </html>

                                <?php
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
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>


    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

        })
    </script>
</body>

</html>