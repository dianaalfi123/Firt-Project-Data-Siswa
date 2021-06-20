<?php
session_start();
if(!$_SESSION['login_siswa']){
	header('location:../login_siswa.php');
}
?>
<html>
	<head><title>d'Iana Project</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="galery/Apple-icon.png"/>
	</head>
	<body>
		
		<div class="nav">
			<ul>
				<li><a href="web_hostinger.php">HOME</a></li>
                <li><a href="aboutus/aboutus.php">ABOUT US</a>
				</li>
				<li><a href="profil2/profil.php">profil</a></li>
                <li><a href="../logout_siswa.php" onclick="return confirm('Are you sure to leave this page?')">logout</a></li>
                <li><a href="../hapus_siswa2.php" onclick="return confirm('Are you sure to delete your account?')">delete user</a></li>
               <li><a style="color:#F5EEE4" href="../daftar_siswa2.php" onclick="return confirm('Are you sure to update your account?')">update user</a></li>
                <li ><a style="color:#F5EEE4" href="profile/Profileee.php">USER</a></li>
			</ul>	
		</div>
		<div class="header">
		<br>
		<br>
		<br>
		<div></div></div>
		<div class="benteng">
			<div class="tambahan1"></div>
			<div class="konten">
			<div class="text_konten">
			<br> 
            <br>
            <br>
			<center><a><font size="4px" face="Times New Roman">Ingin menjadi lulusan yang terbaik?</font></a></center><br><br>
                <center><a><font size="4px" face="Times New Roman">Ingin menjadi lulusan yang berkualitas?</font></a></center>
 <br>
 <br>

                <center><h1><font size="5px" face="Hobo Std">Let's JOIN WITH US
</font></h1></center>
 <br>
 <br>
<center><h3><font size="5px" face="Times New Roman">MAKE YOUR DREAM TO START NOW<br>
By studying at smk telkom malang</font></h3></center>
 <br>
 <br>
			
			<br>
			<div class="galery">	
				<center><img src="back14vin.jpg"></center>
			</div>
			<div class="galery">	
				<center><img src="back31vin.jpg"></center>
			</div>
			
			</div>
			</div>
		</div>
		<div style="clear:both"></div>
		<div class="tambahan-footer"></div>
		<div class="footer">
		<div class="text-footer">
		<address>
		&copy;Diana Alfi Ainun Nur Khasanah 2k17'16,5<br>
            The genius people
		</address>
		</div>
		</div>
	</body>
</html>