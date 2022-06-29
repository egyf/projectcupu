<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      div.container {
         width: 100%;
         border: 1px solid gray;
      }

      header,
      footer {
         padding: 1em;
         color: white;
         background-color: #00CCFF;
         clear: left;
         text-align: center;
      }

      nav {
         float: left;
         max-width: 200px;
         margin: 0;
         padding: 1em;
      }

      nav ul {
         list-style-type: none;
         padding: 0;
      }

      nav ul a {
         text-decoration: none;
      }

      article {
         margin-left: 15px;
         border-left: 2px solid gray;
         padding: 5em;
         overflow: hidden;
      }
   </style>
</head>

<body>
   <?php include "koneksi.php" ?>
   <div class="container">
      <header>
         <h1>TOKO BUKU ONLINE</h1>
      </header>
      <?php include "menu.php" ?>
      <article>
         <?php
         extract($_GET);
         if (isset($menu)) {
            if ($menu == "daftar") {
               include "daftar.php";
            } elseif ($menu == "tampil_buku") {
               include "tampil_buku.php";
            } elseif ($menu == "simpan_member") {
               include "simpan_member.php";
            } elseif ($menu == "member") {
               include "member.php";
            } elseif ($menu == "tampil_member") {
               include "tampil_member.php";
            } elseif ($menu == "edit_member") {
               include "edit_member.php";
            } elseif ($menu == "hapus_member") {
               include "hapus_member.php";
            } elseif ($menu == "kelola_buku") {
               include "kelola_buku.php";
            } elseif ($menu == "hapus_buku") {
               include "hapus_buku.php";
            } elseif ($menu == "edit_buku") {
               include "edit_buku.php";
            }
         }
         ?>
      </article>
      <footer>
         <a href="https://www.youtube.com/c/andriyatrio" target="blank">Copyright &copy; TOBULINE | 1210</a>
      </footer>
   </div>
</body>

</html>