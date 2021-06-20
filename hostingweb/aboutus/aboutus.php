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
				
				<li><a href="aboutus.php">ABOUT US</a>
				</li>
                <li><a href="../profil2/profil.php">profil</a></li>
				<li><a href="../../logout_siswa.php" onclick="return confirm('Are you sure to leave this page?')">logout</a></li>
                <li><a href="../../hapus_siswa2.php" onclick="return confirm('Are you sure to delete your account?')">delete user</a>
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
			
                <h3  align="center"><font face="lucida handwriting" size="20px" color="#0A1100" >SMK TELKOM MALANG</font> </h3>
                <p align="left"><font  face="Chaparral Pro Light">

SMK Telkom Sandhy Putra Malang merupakan sekolah IT Pertama di Indonesia. Didirikan sejak tahun 1992, dan sampai saat ini mengabdi untuk kemajuan pendidikan di Republik Indonesia. Diresmikan oleh Menteri Parpostel waktu itu, yaitu Bpk. Soesilo Soedarman. Pada tahun-tahun awal berdirinya SMK Telkom Sandhy Putra Malang, berada di Gedung APDN di Jl. Kawi Malang.
<br><br>
Dalam perkembangannya, akhirnya pada tahun 1995 SMK Telkom Sandhy Putra Malang telah mempunyai gedung sendiri di daerah Sawojajar Kec. Kedung Kandang. Dalam perpindahannya ke lokasi yang baru, gedung baru SMK Telkom Sandhy Putra Malang diresmikan oleh Direktur Utama PT Telkom pada saat itu, yaitu Bapak Drs. Soeryanto P. Santoso, MA.
<br>
Dalam kiprahnya di dunia pendidikan yang bisa dikatakan cukup lama, SMK Telkom Sandhy Putra Malang telah dipercaya tiap tahunnya dalam mendidik siswa dan siswi yang berkeinginan untuk mempelajari Dunia IT di Indonesia. Karena telah terbukti bahwa pada lulusan tiap tahunnya, lulusan dari SMK Telkom Sandhy Putra Malang bisa dikatakan mudah dalam mencari pekerjaan ataupun untnuk meneruskan sekolahnya.

Dalam hal lulusan, alumni bisa dikatakan mempunyai andil bagian dalam mempermudah para lulusan untuk bekerja di suatu perusahaan. Dengan adanya track record yang baik dari para alumni di tiap perusahaan-perusahaan itu, maka perusahaan-perusahaan itu telah mempercayai bahwa lulusan SMK Telkom Sandhy Putra Malang mempunyai skill dan etos kerja yang bagus untuk masuk ke perusahaan-perusahaan tersebut.</font></p>
			</div>
            <div class="text_konten2">
                 <div class="galery"> <center><img src="back20vin.jpg"></center></div>
                <p  align="center"><font face="Courier New">Beberapa Kejuaraan dalam bidang Teknologi dan Informatika</font></p>
                <br>
                <div class="galery"> <center><img src="back23vin.jpg"></center></div>
                </div>
                </div> 
			</div>
<div style="clear:both"></div>
		<div class="tambahan-footer"></div>
		<div class="footer">
		<div class="text-footer">
		<address>
		&copy;Diana Alfi Ainun Nur Khasanah 2k17'16,5
		</address>
		<address>
		The Genius People
		</address>
		</div>
		</div>
	</body>
</html>