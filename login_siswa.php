<html>
    <head><link rel="stylesheet" type="text/css" href="style_css_siswa.css">
         </head>
        <div class="body">
        <body>
              <br><br>
        <div class="title h1">
        <h1 align="center">--Please login First--</h1></div>
            <center>
            <div class="garis" ></div>
         
        <div class="from h2"> <h2 align="center"> fill this colums</h2></div>
            <form action="proses_login.php" method="post">
	  <?php echo @$pesan;?><br>
    <input type="text" name="username_siswa" placeholder="username"/><br/>
    <input type="password" name="password" placeholder="password"/><br><br>
    <input class="login"  type="submit" name="login" value="LOGIN">
    <div class="form h4">        
    <h4>  Don't have an account? We can fix that!
    <span>
        <a class="signup" href="daftar_siswa.php">Signup</a></span></h4></div> </form></center>
        </body>
            
            </div>
 </html>