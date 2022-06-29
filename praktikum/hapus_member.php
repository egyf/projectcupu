<?php
extract($_POST);
include "koneksi.php";
$sql_delete = mysqli_query($connection, "DELETE FROM tbl_member WHERE id_member='$id'");
if ($sql_delete) {
?>
   <script language="javascript">
      alert("Data Berhasil Dihapus");
      document.location = "index.php?menu=member";
   </script>
<?php
} else {
   mysqli_error($connection);
}
?>