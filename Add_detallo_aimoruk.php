<?php
// Pastikan tombol submit telah ditekan
if(isset($_POST['submit'])) {
    // Ambil nilai yang dikirimkan melalui form
    $id_detallu = $_POST['id_detallu'];
    $id_aimoruk = $_POST['id_aimoruk'];
    $tipu_aimoruk = $_POST['tipu_aimoruk'];
    $stok_aimoruk = $_POST['stok_aimoruk'];
    $obs = $_POST['obs'];

    // Lakukan koneksi ke database (sesuaikan dengan pengaturan server Anda)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospital01";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Buat query SQL untuk menambahkan data ke tabel Detallu_aimoruk
    $sql = "INSERT INTO Detallu_aimoruk (id_detallu, id_aimoruk, tipu_aimoruk, stok_aimoruk, obs) VALUES ('$id_detallu', '$id_aimoruk', '$tipu_aimoruk', '$stok_aimoruk', '$obs')";

    // Jalankan query dan periksa apakah berhasil
    if ($conn->query($sql) === TRUE) {
        // Jika berhasil, set variabel success ke true
        $success = true;
    } else {
        // Jika query gagal dijalankan, set variabel error ke true
        $error = true;
    }

    // Tutup koneksi database
    $conn->close();
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Tampilkan alert ketika data berhasil ditambahkan -->
<?php if(isset($success) && $success === true): ?>
<div class="alert alert-success" role="alert">
    Data berhasil ditambahkan.
    <a href="DetalhoDadus-aimoruk.php" class="btn btn btn-primary">back</a>
</div>
<?php endif; ?>

<!-- Tampilkan alert ketika terjadi error -->
<?php if(isset($error) && $error === true): ?>
<div class="alert alert-danger" role="alert">
    Terjadi kesalahan. Silakan coba lagi.
</div>
<?php endif; ?>
