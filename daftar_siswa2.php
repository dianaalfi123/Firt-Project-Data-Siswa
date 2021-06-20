<?php
session_start();
include "koneksi.php";
$tm_siswa=mysqli_query($konek,"select * from data_siswa where induk_siswa='".$_SESSION['induk_siswa']."'");
$data_siswa=mysqli_fetch_array($tm_siswa);
?>

<html>
    <head><link rel="stylesheet" type="text/css" href="style_css_siswa.css">
       </head><center>
        <body><div class="body">
              <br><br>
        <div class="title h1">
        <h1 align="center">--Please login First--</h1></div>
            <center><div class="garis" ></div>
           <div class="garis" ></div>
                <div class="from h2"> <h2 align="center">Update Your Data</h2></div></center>
            <form action="proses_ubah2.php" method="post">
        
    <input type="text" name="induk_siswa" placeholder="induk_siswa" value="<?php echo $data_siswa['induk_siswa']?>"/><br/>
    <input type="text" name="nama_siswa" placeholder="nama_siswa" value="<?php echo $data_siswa['nama_siswa']?>"/><br/>
    <input type="text" name="tempat_tinggal" placeholder="tempat_tinggal" value="<?php echo $data_siswa['tempat_tinggal']?>"/><br/>
    <input type="text" name="telp" placeholder="telp" value="<?php echo $data_siswa['telp']?>"/><br/>
   
    <input type="text" name="username_siswa" placeholder="username" value="<?php echo $data_siswa['username_siswa']?>"/><br/>
    <input type="password" name="password" placeholder="password" value="<?php echo $data_siswa['password']?>"/><br><br>
    <input a href="login_siswa.php" class="login" type="submit" name="save" value="Save"><br><br>
    <h4 align="center"><div class="signup">  <a href="login_siswa.php">Back</a></div></h4></form></div></body></center></html>