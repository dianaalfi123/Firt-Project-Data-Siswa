<?php
$username_siswa=$_POST['username_siswa'];
$password=$_POST['password'];

if(empty($username) && empty($password)){
    $pesan="Maaf anda harus mengisi kolom dibawah ini";
    include"login_siswa.php";
}elseif(empty($username_siswa)){
    $pesan="Maaf anda harus megisi username";
    include"login_siswa.php";
}elseif(empty($password)){
    $pesan="Maaf anda harus mengisi kolom dibawah ini";
    include "login_siswa.php";
}else{
    include "koneksi.php";
    $cek=mysqli_query($konek,"select * from data_siswa where username_siswa='$username_siswa' and password='".$_POST['password']."'");
    if(mysqli_num_rows($cek)>0){
        session_start();
        $data_cek=mysqli_fetch_array($cek);
		$_SESSION['username_siswa']=$_POST['username_siswa'];
		$_SESSION['password']=$_POST['password'];
        $_SESSION['induk_siswa']=$data_cek['induk_siswa'];
		$_SESSION['login_siswa']=true;
		$_SESSION['nama_siswa']=$data_cek['nama_siswa'];
		header('location:hostingweb/web_hostinger.php');
    }else{
	echo "Username dan Password yang anda inputkan  SALAH".mysqli_error($konek);
	include "login_siswa.php";
}
}
?>