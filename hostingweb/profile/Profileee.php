<?php
include "header.php";
include "../../koneksi.php";
$tm_profile=mysqli_query($konek,"select * from data_siswa where induk_siswa='".$_SESSION['induk_siswa']."'");
$data_tm=mysqli_fetch_array($tm_profile);
?>
<style>
.desain{
	background:orange;
	border:none;
	}
.desain th{
	background:#F7AC2B;
	color:#0F4A35;
	border:none;
	}
.desain td{
	background:#F7AC2B;
	color:#0F4A35;
	border:none;
	}
.desain td{
	background:#6AF7C3;
	transition:all .5s;
	border:none;
	border-bottom:#F1BC4B 5px solid;
}
.desain tr:hover td{
	background:#CDEE73;
	transition:all .8s;
}
</style>
<h2 align="center" ><font color="#FCC609" face="lucida handwriting">Tampil Data siswa</font></h2>
<table align="center" border="2" cellpadding="6" cellspacing="1" class="desain">
	<tr>
		<th>No</th>
		<th>induk Siswa </th>
		<th>Nama Siswa</th>
		<th>tempat tinggal</th>
		<th>Telp</th>
        <th>agama</th>
        <th>gender</th>
        <th>tempat lahir</th>
        <th>tanggal_lahir</th>
		<th  colspan="2">Option</th>
	</tr>
	<?php
	include "../../koneksi.php";
	$siswa=mysqli_query($konek,"select * from data_siswa");
	$no=0;
	while($data_siswa=mysqli_fetch_array($siswa)){
		$no++;
		echo"
		<tr>
			<td>$no</td>
			<td>".$data_siswa['induk_siswa']."</td>
			<td>".$data_siswa['nama_siswa']."</td>
			<td>".$data_siswa['tempat_tinggal']."</td>
			<td>".$data_siswa['telp']."</td>
            <td>".$data_siswa['agama']."</td>
            <td>".$data_siswa['gender']."</td>
            <td>".$data_siswa['tempat_lahir']."</td>
            <td>".$data_siswa['tanggal_lahir']."</td>
			<td><a href='../../daftar_siswa2.php?induk_siswa=".$data_siswa['induk_siswa']."'> Update</a></td>
			<td><a href='../../hapus_siswa.php?induk_siswa=".$data_siswa['induk_siswa']."'>Delete</a></td>
		</tr>
		";
	}
	?>
</table>
<?php
include "footer.php";
?>