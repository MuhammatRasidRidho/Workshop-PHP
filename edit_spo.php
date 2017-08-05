<?php
// lebih jelas kunjungi http://emerer.com 
// atau hubungi WA 0831 8393 2425
// M Rasid Ridho, S.Kom., M.SI.

include"konek.php";
//memilih tabel siswa untuk ditampilkan datanya
$d=mysqli_query ($kon, "SELECT*FROM siswa WHERE
no_pendaftaran='$_GET[id]' ");
$r=mysqli_fetch_array($d);
echo"
<form method=POST action=update_spo.php>
<input type=hidden name=id value=$r[no_pendaftaran]>
<table>
	<tr>
		<td>No.Pendaftaran</td><td>:</td>
		<td><input type=text name=no_pendaftaran value=$r[no_pendaftaran]></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td><td>:</td>
		<td><input type=text name=nama value='$r[nama]''></td>
	</tr>
	<tr>
		<td>Jurusan</td><td>:</td>
		<td><select name=kd_jurusan>";
//ERD tabel siswa dengan tabel jurusan
$ds=mysqli_query ($kon, " SELECT * FROM siswa 
	WHERE
	no_pendaftaran='$_GET[id]' "); //memilih tabel siswa
$rs=mysqli_fetch_array($ds);

//memilih tabel jurusan
$dj=mysqli_query($kon, "SELECT * FROM jurusan");
	while($rj=mysqli_fetch_array($dj)){
	if($rj['kd_jurusan']==$rs['kd_jurusan']){
		echo"<option value=$rj[kd_jurusan]
		selected>$rj[nama_jurusan]";
	}
	else{
		echo"<option
		value=$rj[kd_jurusan]>$rj[nama_jurusan]";
	}
}
echo" </select>
</td>
</tr>
</table>
<input type=submit value=UPDATE>
</form>";
?>