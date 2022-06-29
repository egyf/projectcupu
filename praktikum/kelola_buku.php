<title>.: TOBULINE :.</title>
<FORM action="" method="POST">
   <h2>
      <p style="margin-left:18px; margin-top:-70px;">." KELOLA KATALOG BUKU TOBULINE ".</p>
   </h2>
   <table width="759" height="193" border="0">
      <?php
      $tampil = mysqli_query($connection, "SELECT * FROM tbl_buku");
      while ($data = mysqli_fetch_array($tampil)) {
         $Fnumber = number_format($data['harga']);
         echo " 
         <tr>
            <td width='132' rowspan='10' align='center'>
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
         <tr?>
            <td>Harga</td>
            <td>:</td>
            <td>Rp. $Fnumber</td>
         </tr>
         <tr?>
            <td>Opsi</td>
            <td>:</td>
            <td>
            <a href='index.php?menu=hapus_buku&id=$data[0]' 
               onclick='return confirm('Apakah anda yakin akan menghapus data ini?');' title='Delet' style='text-decoration:none;'><img src='../img/button-del.png' alt='DELETE' style='width: 50px; padding-top:10px;'>
               </a>

            <a href='index.php?menu=edit_buku&id=$data[0]' 
               onclick='return confirm('Apakah anda yakin akan menghapus data ini?');' title='Edit' style='text-decoration:none;'><img src='../img/button-edit.png' alt='DELETE' style='width: 34px; padding-top:10px;'>
               </a>
            </td>
         </tr>
         <tr>
            <td colspan='3' ><hr></td>
         </tr>
         
      ";
      }
      ?>
      <!-- <input type='submit' name='submit' value='delete' style='margin-left:1px; '> -->
      <!-- <a type='submit' href='index.php?menu=hapus_buku&id=$data[0]' onclick='return confirm('Anda Yakin.?')>delete</a> -->

      <!-- <img src='../img/delete.png' alt='DELETE' style='width: 23px;'> -->
   </table>