<?php

include 'koneksi.php';
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal'];
  $deskripsi = $_POST['deskripsi'];
  $query = mysqli_query($koneksi,"INSERT INTO pr (nama,tanggal,deskripsi) VALUES ('$nama','$tanggal','$deskripsi')");
  if ($query) {
    echo "<div class = 'alert alert-success' style='text-align:center;'> data berhasil disimpan</div>";
  } else {
      echo "<div class ='aletr alert-danger' style='text-align:center;'> data gagal disimpan</div>";
  }
}
?>