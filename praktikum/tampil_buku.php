<title>.: TOBULINE :.</title>
<FORM action="" method="POST">
   <h2><u style="margin-left:18px ;">." KATALOG BUKU TOBULINE ".</u></h2>
   <table width="759" height="193" border="0">
      <?php
      $tampil = mysqli_query($connection, "SELECT * FROM tbl_buku");
      while ($data = mysqli_fetch_array($tampil)) {
         $Fnumber = number_format($data['harga']);
         echo " 
         <tr>
            <td width='132' rowspan='9' align='center'>
            <img src='../img/$data[photo_buku]' width='94' height='122' alt=''></td>
         </tr>
         <tr>
            <td width='109'>Judul Buku</td>
            <td width='12'>:</td>
            <td width='488'>$data[judul_buku]</td>
         </tr>
         <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td>$data[pengarang]</td>
         </tr>
         <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td>$data[penerbit]</td>
         </tr>
         <tr>
            <td>Tahun</td>
            <td>:</td>
            <td>$data[tahun]</td>
         </tr>
         <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>$data[deskripsi]</td>
         </tr>
         <tr>
            <td>Stok</td>
            <td>:</td>
            <td>$data[stok]</td>
         </tr>
         <tr>
            <td>Harga</td>
            <td>:</td>
            <td>Rp. $Fnumber
               <input type='submit' name='submit' value='Beli' style='margin-left:20px;'>
            </td>
         </tr>
         <tr>
            <td colspan='3'><hr></td>
         </tr>   
      ";
      }
      ?>

   </table>