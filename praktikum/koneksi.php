<?php

$dbhost = "localhost"; //alamat web server
$dbuser = "root"; //user web server
$dbpassword = ""; //password web server
$database = "db_ecomerce"; //nama database yg digunakan
$connection = mysqli_connect("$dbhost", "$dbuser", "", "$database",);
if (mysqli_connect_errno()) {
   echo "Koneksi Database Gagal" . mysqli_connect_error();
}
