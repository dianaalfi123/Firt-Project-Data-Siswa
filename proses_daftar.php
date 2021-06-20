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

if(empty($induk_siswa)){
        echo "<script>alert('mohon isi kolom induk siswa');location.href='daftar_siswa.php'</script>"; 
}elseif(empty($nama_siswa)){
        echo "<script>alert('mohon isi kolom nama siswa');location.href='daftar_siswa.php'</script>"; 
}elseif(empty($tempat_tinggal)){
       echo "<script>alert('mohon isi kolom tempat tinggal');location.href='daftar_siswa.php'</script>"; 
}elseif(empty($telp)){
        echo "<script>alert('mohon isi kolom telp');location.href='daftar_siswa.php'</script>"; 
}elseif(empty($agama)){
        echo "<script>alert('mohon pilih opsi');location.href='daftar_siswa.php'</script>"; 
}elseif(empty($gender)){
        echo "<script>alert('mohon pilih opsi');location.href='daftar_siswa.php'</script>"; 
}elseif(empty($tempat_lahir)){
        echo "<script>alert('mohon isi kolom tempat lahir');location.href='daftar_siswa.php'</script>"; 
}elseif(empty($tanggal_lahir)){
       echo "<script>alert('mohon pilih opsi ');location.href='daftar_siswa.php'</script>"; 
}elseif(empty($username_siswa)){
       echo "<script>alert('mohon isi kolom username');location.href='daftar_siswa.php'</script>"; 
}elseif(empty($password)){
    echo "<script>alert('mohon isi kolom password');location.href='daftar_siswa.php'</script>";  
}else{
    include "koneksi.php";
    $masuk=mysqli_query($konek,"INSERT INTO `data_siswa`(`induk_siswa`, `nama_siswa`, `tempat_tinggal`, `telp`, `agama`, `gender`, `tempat_lahir`, `tanggal_lahir`, `username_siswa`, `password`) VALUES ('$induk_siswa','$nama_siswa','$tempat_tinggal','$telp','$agama', '$gender','$tempat_lahir','$tanggal_lahir','$username_siswa','".$_POST['password']."')");
    
    if($masuk){
		echo "<script>alert('Selamat, Anda Telah Sukses Menginputkan data');
		location.href='login_siswa.php';</script>";
	}else{
		echo "Maaf Anda Telah Gagal Menginputkan Data".mysqli_error($konek);
	}
}
?>