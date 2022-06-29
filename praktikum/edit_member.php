<?php
$submit = "";
extract($_POST);
if ($submit == "UPDATE") {
   // Seleksi password dikosongkan
   if ($password == "") {
      // $jk = '';
      $sql_update = mysqli_query($connection, "UPDATE tbl_member SET nama_member = '$nama_member',
      jk = '$jk', alamat = '$alamat', no_hp = '$no_hp', email = '$email'
      WHERE id_member='$id'") or die(mysqli_error($connection));
   } else {
      $passmd == md5($pass);
      $sql_update = mysqli_query($connection, "UPDATE tbl_member SET nama_member = '$nama_member',
      jk = '$jk', alamat = '$alamat', no_hp = '$no_hp', email = '$email', password = '$passmd'
      WHERE id_member='$id'") or die(mysqli_error($connection));
   }
   if ($sql_update) {
      $msg = "Data member berhasil di Update";
   } else {
      $msg = "Data Member Gagal di Update";
   }
} else { ?>
   <!DOCTYPE html>
   <html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>

   <body>
      <FORM name="form1" method="POST" action="#">
         <PRE>
         <h2>Update Member TOBULINE</h2>
         <?php
         extract($_GET);
         $show = mysqli_query($connection, "SELECT * FROM tbl_member WHERE id_member='$id'");
         $jml = mysqli_num_rows($show);
         $data = mysqli_fetch_array($show);

         function active_radioButton($value, $input)
         {
            $result = $value == $input ? 'checked' : '';
            return $result;
         }

         echo " 
               <input type='hidden' name='id_member' value='$id'>
               Nama member    : <input type='text' name='nama_member' value='$data[nama_member]'>
               Jenis Kelamin  : <input type='radio' name='jk' value='L' id='jk_0'" . active_radioButton('L', 
                           $data['jk']) . ">Laki-Laki
                                 <input type='radio' name='jk' value='P' id='jk_1'" . active_radioButton('P', $data['jk']) . ">Perempuan
               Alamat         : <textarea name='alamat'>$data[alamat]</textarea>
               No HP          : <input type='number' name='no_hp' value='$data[no_hp]'>
               Email          : <input type='email' name='email' value='$data[email]'>
               Password       : <input type='text' name='password'>
               Upload KTP     : <input type='file' name='ktp' value='$data[ktp]'><br>
               <input type='submit' name='submit' value='UPDATE'>    <input type='reset' name='reset' value='BATAL'>
            ";
         ?>
      </PRE>
      </FORM>
   </body>

   </html>
<?php } ?>