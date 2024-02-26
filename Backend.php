<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function addMenu($nama_menu) {
    global $conn;
    $sql = "INSERT INTO menu (nama_menu) VALUES ('$nama_menu')";
    return $conn->query($sql);
}
function addSubmenu($id_menu, $nama_submenu, $url) {
    global $conn;
    $sql = "INSERT INTO submenu (id_menu, nama_submenu, url) VALUES ($id_menu, '$nama_submenu', '$url')";
    return $conn->query($sql);
}

function getAllMenus() {
    global $conn;
    $sql = "SELECT * FROM menu";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getSubmenusByMenuId($id_menu) {
    global $conn;
    $sql = "SELECT * FROM submenu WHERE id_menu = $id_menu";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function deleteMenu($id) {
    global $conn;
    // Hapus submenu terlebih dahulu
    $conn->query("DELETE FROM submenu WHERE id_menu = $id");
    // Hapus menu
    $sql = "DELETE FROM menu WHERE id = $id";
    return $conn->query($sql);
}

function deleteSubmenu($id) {
    global $conn;
    $sql = "DELETE FROM submenu WHERE id = $id";
    return $conn->query($sql);
}
?>
