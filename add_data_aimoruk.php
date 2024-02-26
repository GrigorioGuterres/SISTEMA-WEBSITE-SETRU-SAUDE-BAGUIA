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

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Memeriksa apakah semua input telah diisi
    if (!empty($_POST["id_aimoruk"]) && !empty($_POST["naran_aimoruk"]) && !empty($_POST["obs"])) {
        // Menangkap data dari form
        $id_aimoruk = $_POST["id_aimoruk"];
        $naran_aimoruk = $_POST["naran_aimoruk"];
        $obs = $_POST["obs"];

        // Query untuk menambahkan data ke dalam tabel t_aimoruk
        $sql = "INSERT INTO t_aimoruk (id_aimoruk, naran_aimoruk, obs) VALUES ('$id_aimoruk', '$naran_aimoruk', '$obs')";

        // Menjalankan query dan memeriksa apakah berhasil
        if ($conn->query($sql) === TRUE) {
            // Mengarahkan kembali ke halaman sebelumnya dengan menambahkan parameter success=true
            header("Location: Dadus-aimoruk.php?success=true");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // Menampilkan pesan alert jika semua input tidak diisi
        echo '<script>alert("Semua input harus diisi.")</script>';
    }
}

// Menutup koneksi
$conn->close();
?>
