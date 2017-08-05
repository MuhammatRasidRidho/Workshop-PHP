<?php
include"konek.php";

$a=mysqli_query($kon, "UPDATE siswa 
	SET
	no_pendaftaran='$_POST[no_pendaftaran]',
	nama='$_POST[nama]', kd_jurusan='$_POST[kd_jurusan]'
	WHERE no_pendaftaran='$_POST[id]'");

if($a){
header('location:lihat_spo.php'); }
else{
echo"gagal"; }

// lebih jelas kunjungi http://emerer.com 
// atau hubungi WA 0831 8393 2425
// Muhammat Rasid Ridho, S.Kom., M.SI.
?>