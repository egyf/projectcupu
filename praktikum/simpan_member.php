<?php
extract($_POST);
$passmd = md5($password);
// $result = mysqli_query($connection, "UPDATE tbl_member SET jk = 'L'");
// $result = mysqli_query($connection, "UPDATE tbl_member SET email=' ' WHERE email LIKE '%@gmail.com%'; ");.
if ($submit == "DAFTAR") {
   $tambah = mysqli_query($connection, "INSERT INTO tbl_member 
      VALUES('','$nama_member','$jk','$alamat','$no_hp','$ktp','$email','$passmd')") or die(mysqli_error($connection));
   if ($tambah) {
      $msg = "Anda Sudah terdaftar menjadi Member";
   } else {
      $msg = "Registrasi Member Gagal";
   }
   echo $msg;
}
