<?php
// lebih jelas kunjungi http://emerer.com 
// atau hubungi WA 0831 8393 2425
// Muhammat Rasid Ridho, S.Kom., M.SI.


include"konek.php";
$sukses=mysqli_query ($kon, "INSERT INTO siswa 
	(no_pendaftaran, nama, alamat, jns_kelamin, agama, email, sekolah_asal, kd_jurusan) 
	VALUE (
		'$_POST[no_pendaftaran]', 
		'$_POST[nama]',
		'$_POST[alamat]', 
		'$_POST[jns_kelamin]',
		'$_POST[agama]', 
		'$_POST[email]',
		'$_POST[sekolah_asal]', 
		'$_POST[kd_jurusan]') ");
if($sukses){
	header('location:lihat_spo.php');
} else {
	echo"Gagal";
}
?>