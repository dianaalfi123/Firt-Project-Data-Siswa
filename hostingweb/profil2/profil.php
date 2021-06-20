<?php

include "header.php";
include "../../koneksi.php";
$tm_siswa=mysqli_query($konek,"select * from data_siswa where induk_siswa='".$_SESSION['induk_siswa']."'");
$data_siswa=mysqli_fetch_array($tm_siswa);
?>
<html><head><link rel="stylesheet" type="text/css" href="../../style_css_siswa.css"></head><body>
<form action="../../proses_ubah3.php" method="post">
        
    <h1>Profil Siswa</h1>
    <br>
    
    <a>Induk siswa</a>  &nbsp;&nbsp;&nbsp;: <input type="text" name="induk_siswa" placeholder="induk_siswa" value="<?php echo $data_siswa['induk_siswa']?>"/><br/>
    Nama Siswa &nbsp;&nbsp;&nbsp;  : <input type="text" name="nama_siswa" placeholder="nama_siswa" value="<?php echo $data_siswa['nama_siswa']?>"/><br/>
    Tempat Tinggal : <input type="text" name="tempat_tinggal" placeholder="tempat_tinggal" value="<?php echo $data_siswa['tempat_tinggal']?>"/><br/>
    Telepon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <input type="text" name="telp" placeholder="telp" value="<?php echo $data_siswa['telp']?>"/><br/>
   
   Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="username_siswa" placeholder="username" value="<?php echo $data_siswa['username_siswa']?>"/><br/>
    Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="password" placeholder="password" value="<?php echo $data_siswa['password']?>"/><br><br>
<br><br>
    <input style="color:#0A1C89" class="signup"  class="update" type="submit" name="update" value="Update" onclick="return confirm('Are you sure to update your account?')"><br><br>
     <br></form></body></html>
<?php
    include "footer.php"
?>