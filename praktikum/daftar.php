<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <FORM name="form1" method="POST" action="index.php?menu=simpan_member">
      <pre>
      <h2>     Registrasi Member TOBULINE</h2>
      Nama member    : <input type="text" name="nama_member">
      Jenis Kelamin  : <input type="radio" name="jk" value="L" id="jk_0">Laki-Laki<input type="radio" name="jk" value="P" id="jk_1">Perempuan
      Alamat         : <textarea name="alamat"></textarea>
      No HP          : <input type="number" name="no_hp">
      Email          : <input type="email" name="email">
      Password       : <input type="text" name="password">
      Upload KTP     : <input type="file" name="ktp"><br>
      <input type="submit" name="submit" value="DAFTAR">    <input type="reset" name="reset" value="BATAL">
   </pre>
   </FORM>
</body>

</html>