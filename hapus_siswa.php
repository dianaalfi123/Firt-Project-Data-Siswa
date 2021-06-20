<?php
$induk_siswa=$_GET['induk_siswa'];

include "koneksi.php";
$masuk=mysqli_query($konek,"DELETE FROM data_siswa WHERE induk_siswa='$induk_siswa'");

if($masuk){
	echo "<script>alert('Anda Sukses Menghapus Data');location.href='hostingweb/profile/Profileee.php'</script>";
}else{
	echo "Coba Lagi".mysqli_error($konek);
}
?>