<FORM action="" method="POST">
   <table border="1">
      <tr style='text-align:center;'>
         <td>No</td>
         <td>Nama Member</td>
         <td>Gender</td>
         <td>Alamat</td>
         <td>No Hp</td>
         <td>KTP</td>
         <td>Email</td>
         <td>Opsi</td>
      </tr>
      <?php
      include "koneksi.php";
      $no = 0;
      $tampil = mysqli_query($connection, "SELECT * FROM tbl_member");
      $jml = mysqli_num_rows($tampil);
      while ($data = mysqli_fetch_array($tampil)) {
         $no++;
         echo " 
            <tr>
               <td style='text-align:center;' >$no</td>
               <td>$data[1]</td>
               <td style='text-align:center;' >$data[2]</td>
               <td>$data[3]</td>
               <td>$data[4]</td>
               <td>$data[5]</td>
               <td>$data[6]</td>
               <td>
               <a href='index.php?menu=edit_member&id=$data[0]'><img src='../img/edit.png' title='Edit Data'' style='width: 23px;'></a> |
               <a href='index.php?menu=hapus_member&id=$data[0]' 
               onclick='return confirm('Apakah anda yakin akan menghapus data ini?')' title='Delet Data'><img src='../img/delete.png' alt='DELETE' style='width: 23px;'></a>
               </td>
            </tr>
         ";
      }
      ?>
   </table><?php
            echo "<p style='color:rgba(0, 0, 255, 0.663);'>Jumlah Member [ <b style='color:blue;'>$jml</b> ]</p>"
            ?>
</FORM>