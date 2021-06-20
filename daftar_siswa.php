<html>
    <head><link rel="stylesheet" type="text/css" href="style_css_siswa.css">
       </head><center>
        <body><div class="body">
              <br><br><br><br>
        <div class="title h1">
        <h1 align="center">--Please login First--</h1></div>
            <center><div class="garis" ></div>
           <div class="garis" ></div>
                <div class="from h2"> <h2 align="center">Fill Your Data</h2></div></center>
            <form action="proses_daftar.php" method="post">
        
	  <?php echo @$pesan;?><br>

    <input type="text" name="induk_siswa" placeholder="induk_siswa"><br/>
    <input type="text" name="nama_siswa" placeholder="nama_siswa" value=""><br/>
    <input type="text" name="tempat_tinggal" placeholder="tempat_tinggal" value=""><br/>
    <input type="text" name="telp" placeholder="telp" value=""><br/>
    <div  class="gam">
        <td>Agama</td><div class="gam2">
        <select name="agama" type="option" value="">
        <option></option>
        <option value="Islam">Islam</option>
         <option value="Kristen">Kristen</option>
             <option value="Katolik">Katolik</option>
             <option value="Budha">Budha</option>
             <option value="Hindu">Hindu</option>
        </select><br>
        
        </div></div>   
   <div class="gen"><td>Gender</td>
    <div class="gen2">
        <input type="radio" name="gender" id="gender_L" value="L" value=""><label for="gender_L">Laki-laki</label>
        <input type="radio" name="gender" id="gender_P" value="P"><label for="gender_P" >Perempuan</label>
</div></div>
                
    <input name="tempat_lahir" placeholder="tempat_lahir" type="text"><br>
    <input name="tanggal_lahir" placeholder="tanggal_lahir" type="date"><br>
    <input type="text" name="username_siswa" placeholder="username"><br/>
    <input type="password" name="password" placeholder="password"/><br><br>
    <input a href="login_siswa.php" class="login" type="submit" name="save" value="Save"><br><br>
    <h4 align="center"><div class="signup">  <a href="login_siswa.php">Back</a></div></h4></form></div></body></center></html>