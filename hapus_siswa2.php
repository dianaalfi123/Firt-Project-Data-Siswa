<?php
session_start();

include "koneksi.php";
$hapus=mysqli_query($konek,"delete from data_siswa where induk_siswa='$_SESSION[induk_siswa]'");

if(!$hapus){
	echo "gagal menghapus akun";
}else{
    header('location:logout_siswa.php');
}
?>