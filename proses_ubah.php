<?php
$induk_siswa=$_POST['induk_siswa'];
$nama_siswa=$_POST['nama_siswa'];
$tempat_tinggal=$_POST['tempat_tinggal'];
$telp=$_POST['telp'];
$agama=$_POST['agama'];
$gender=$_POST['gender'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$username_siswa=$_POST['username_siswa'];
$password=$_POST['password'];

include "koneksi.php";
$ubah=mysqli_query($konek,"update data_siswa set induk_siswa='$induk_siswa',nama_siswa='$nama_siswa',
tempat_tinggal='$tempat_tinggal',telp='$telp',agama='$agama',gender='$gender',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',username='$username',password='".$_POST['password']."' where
 induk_siswa='$induk_siswa'");
if($ubah){
	echo "<script>alert('Selamat, Anda Telah sukses Mengupdate');
	location.href='hostingweb/profile/profileee.php?induk_siswa=$induk_siswa';</script>";
}else{
	echo"Maaf Anda Gagal Mengupdate".mysqli_error($konek);
}
?>