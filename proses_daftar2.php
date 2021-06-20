<html>
    <head><link rel="stylesheet" type="text/css" href="style_css_siswa.css">
      
        <div class="body">
        <body>
              <br><br>
        <div class="title h1">
        <h1 align="center">--Please login Firts--</h1></div>
            <center><div class="garis" ></div>
           <div class="garis" ></div>
           <div class="from h2"> <h2 align="center">Update Your Data</h2></div>
            <form action="proses_login.php" method="post">
	  <?php echo @$pesan;?><br>
    <input type="text" name="induk_siswa" placeholder="induk_siswa"/><br/>
    <input type="text" name="nama_siswa" placeholder="nama_siswa"/><br/>
    <input type="text" name="tempat_tinggal" placeholder="tempat_tinggal"/><br/>
    <input type="text" name="telp" placeholder="telp"/><br/>
    <input type="text" name="agama" placeholder="agama"/><br/>
    <input type="text" name="gender" placeholder="gender"/><br/>
    <input type="text" name="tempat_lahir" placeholder="tanggal_lahir"/><br/>
    <input type="text" name="username_siswa" placeholder="username_siswa"/><br/>
    <input type="password" name="password" placeholder="password"/><br><br>
    <input a href="login_siswa.php" class="login" type="submit" name="save" value="Save"><br><br>
     <h4 align="center"> <a class="signup"  href="login_siswa.php">Back</a> </h4>
         </h4></div>
        </div> 
        </body>
            </center>
            </div>
    </head></html>