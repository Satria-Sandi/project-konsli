<?php

include 'koneksi.php';
if(isset($_POST['update'])){
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $date = $_POST['tanggal'];
  $deskripsi = $_POST['deskripsi'];
  $sql = mysqli_query ($koneksi,"UPDATE pr SET nama='$nama', tanggal='$date', deskripsi='$deskripsi' WHERE id='$id'");
  if ($sql) {
    echo "<div class = 'alert alert-success' style='text-align:center;'> data berhasil diubahh</div>";
  } else {
      echo "<div class ='aletr alert-danger' style='text-align:center;'> data gagal diubah</div>";
  }
}
?>