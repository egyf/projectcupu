<?php

$submit = "";
extract($_POST);
if ($submit == 'UPDATE') {
   $sql_update = mysqli_query($connection, "UPDATE tbl_buku SET judul_buku='$judul_buku', pengarang='$pengarang', penerbit='$penerbit', tahun='$tahun', deskripsi='$deskripsi', photo_buku='$photo_buku', stok='$stok', harga='$harga' WHERE kd_buku='$id'") or die(mysqli_error($connection));
   if ($sql_update) {
      $msg = "Data Buku Berhasil Diupdate";
   } else {
      $msg = "Data Gagal Diupdate";
   }
   echo $msg;
} else { ?>
   <!DOCTYPE html>
   <html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Edit Data</title>
   </head>

   <body>
      <FORM action="#" name="form1" method="POST" enctype="multipart/form-data">
         <pre>
            <h2>Update Buku TOBULINE</h2>
            <?php
            extract($_GET);
            $show = mysqli_query($connection, "SELECT * FROM tbl_buku WHERE kd_buku='$id'");
            $jml = mysqli_num_rows($show);
            $data = mysqli_fetch_array($show);

            function activeRadioButton($value, $input)
            {
               $result = $value == $input ? 'checked' : '';
               return $result;
            }
            echo "
               <input type='hidden' name='kd_buku' value='$id'>
               Judul Buku  : <input type='text' name='judul_buku' value='$data[judul_buku]'><br>
               Pengarang   : <input type='text' name='pengarang' value='$data[pengarang]'><br>
               Penerbit    : <input type='text' name='penerbit' value='$data[penerbit]'><br>
               Tahun       : <input type='text' name='tahun' velue='$data[tahun]'><br>
               Deskripsi   : <textarea name='deskripsi'>$data[deskripsi]</textarea><br>
               Cover Buku  : <textarea name='photo_buku'>$data[photo_buku]</textarea><br>
               Stok        : <input type='text' name='stok' value='$data[stok]'><br>
               Harga       : <input type='text' name='harga' value='$data[harga]'><br>
               <input type='submit' name='submit' value='UPDATE'>
         </pre>";
            ?>
      </FORM>
   </body>

   </html>
<?php
}
?>