<?php
// lebih jelas kunjungi http://emerer.com 
// atau hubungi WA 0831 8393 2425
// Muhammat Rasid Ridho, S.Kom., M.SI.


include"konek.php";

mysqli_query($kon, "DELETE FROM siswa 
		WHERE
		no_pendaftaran='$_GET[id]'");

header('location:lihat_spo.php');
?>