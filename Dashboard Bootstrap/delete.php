<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = $koneksi->query("SELECT * FROM pr WHERE id='$id'");
$data = $sql->fetch_assoc();
$query = $koneksi->query("DELETE FROM pr WHERE id='$id'");

if ($query) {
    echo "<div class = 'alert alert-success' style='text-align:center;'> data berhasil dihapus</div>";
} else {
    echo "<div class ='aletr alert-danger' style='text-align:center;'> data gagal dihapus</div>";
}