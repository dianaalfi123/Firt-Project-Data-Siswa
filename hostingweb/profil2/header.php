<!DOCTYPE html>
<?php
session_start();
if(!$_SESSION['login_siswa']){
	header('location:../../login_siswa.php');
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
				<li><a href="../web_hostinger.php">HOME</a></li>
                <li><a href="../aboutus/aboutus.php">ABOUT US</a></li>
                <li><a href="profil.php">profil</a></li>
				<li><a href="../../logout_siswa.php" onclick="return confirm('Are you sure to leave this page?')">logout</a></li>
                <li><a href="../../hapus_siswa2.php" onclick="return confirm('Are you sure to delete your account?')">delete user</a>
                <li><a style="color:#F5EEE4"  href="../../daftar_siswa2.php" onclick="return confirm('Are you sure to update your account?')">update user</a></li>
                <li ><a style="color:#F5EEE4" href="../profile/Profileee.php">USER</a></li>
                
			</ul>	
		</div>
		<div class="header"><center>
		<br>
		<br>
		<br>
		<div></div>
		<div class="benteng">
			<div class="tambahan1"></div>
			<div class="konten">
			<div class="text_konten">
			<br>
			<br>
			
			
			