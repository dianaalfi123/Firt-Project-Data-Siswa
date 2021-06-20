<?php
$induk_siswa=$_POST['induk_siswa'];
$nama_siswa=$_POST['nama_siswa'];
$tempat_tinggal=$_POST['tempat_tinggal'];
$telp=$_POST['telp'];
$username_siswa=$_POST['username_siswa'];
$password=$_POST['password'];


include "koneksi.php";
session_start();

$ubah=mysqli_query($konek,"update data_siswa set induk_siswa='$induk_siswa',nama_siswa='$nama_siswa',
tempat_tinggal='$tempat_tinggal',telp='$telp',username_siswa='$username_siswa',password='".$_POST['password']."' where
induk_siswa='$induk_siswa'");

if(!$ubah){
	echo "gagal update";
}else{
    header('location:login_siswa.php');
}

?>