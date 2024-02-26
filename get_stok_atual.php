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

// Mengambil nilai stok atual berdasarkan id_detallu_aimoruk yang diberikan
$idDetalluAimoruk = $_GET['id_detallu'];
$sql = "SELECT stok_aimoruk FROM Detallu_aimoruk WHERE id_detallu = $idDetalluAimoruk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['stok_aimoruk'];
} else {
    echo "0"; // Jika tidak ada data, nilai stok atual diatur ke 0
}

// Menutup koneksi
$conn->close();
?>
