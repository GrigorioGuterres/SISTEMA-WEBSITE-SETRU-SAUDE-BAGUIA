<?php
// Pastikan form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Mendapatkan data dari form
    $id_detallu_aimoruk = $_POST['id_detallu_aimoruk'];
    $kuantidade = $_POST['kuantidade'];
    $id_staf = $_POST['id_staf'];
    $id_klinika = $_POST['id_klinika'];
    $data_prosesu = $_POST['data_prosesu'];
    $obs = $_POST['obs'];
    $sisa_stok = $_POST['sisa_stok']; // Ambil nilai Sisa Stok dari formulir
    $stok_atual = $_POST['stok_atual']; // Ambil nilai Stok Atual dari formulir

    // Query untuk menyimpan data ke dalam tabel t_prosesu_aimoruk
    $sql = "INSERT INTO t_prosesu_aimoruk (id_detallu, kuantidade, id_staf, id_klinika, data_prosesu, obs, sisa_stok, stok_atual)
            VALUES ('$id_detallu_aimoruk', '$kuantidade', '$id_staf', '$id_klinika', '$data_prosesu', '$obs', '$sisa_stok', '$stok_atual')";

    if ($conn->query($sql) === TRUE) {
        // Perbarui stok_aimoruk di tabel detallu_aimoruk
        $update_sql = "UPDATE detallu_aimoruk SET stok_aimoruk = stok_aimoruk - $sisa_stok WHERE id_detallu = $id_detallu_aimoruk";
        if ($conn->query($update_sql) === TRUE) {
            echo "Data berhasil ditambahkan.";
        } else {
            echo "Error updating stok_aimoruk: " . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
?>
