<?php
extract($_POST);
include "koneksi.php";
$sql_delete = mysqli_query($connection, "DELETE FROM tbl_buku WHERE kd_buku='$id'");
if ($sql_delete) {
?>
   <script language="javascript">
      alert("Data Berhasil Dihapus");
      document.location = "index.php?menu=kelola_buku";
   </script>
<?php
} else {
   mysqli_error($connection);
}
?>