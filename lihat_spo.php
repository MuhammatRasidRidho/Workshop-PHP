<?php
// lebih jelas kunjungi http://emerer.com 
// atau hubungi WA 0831 8393 2425
// Muhammat Rasid Ridho, S.Kom., M.SI.


include"konek.php";
include"header.php";


echo"
<form method=POST action=form_spo.php>
<input type=submit value=DAFTAR>
</form>
<table border=1>
	<tr>
		<td>No</td>
		<td>No.Pendaftaran</td>
		<td>Nama Lengkap</td>
		<td>Jurusan</td>
		<td></td>
	</tr>";

//mendefinisikan no urut
$no=1;
//memilih (memanggil) data menggunakan relasi tabel siswa dan jurusan
$data=mysqli_query ($kon, "SELECT*FROM siswa,jurusan WHERE
siswa.kd_jurusan=jurusan.kd_jurusan ORDER BY
no_pendaftaran DESC");
//pengulangan data yang ada pada tabel keduanya
while($r=mysqli_fetch_array($data)){
echo"
	<tr>
		<td>$no.</td>
		<td>$r[no_pendaftaran]</td>
		<td>$r[nama]</td>
		<td>$r[nama_jurusan]</td>

		<td><a href=edit_spo.php?id=$r[no_pendaftaran]>Edit</a> |
		<a href=\"hapus_spo.php?id=$r[no_pendaftaran] \" onClick=\"return confirm('Yakin Hapus $r[nama]?') \">Hapus</a>
		</td>			
	</tr>";



//penambahan 1 angka secara otomatis
$no++;
}
echo"</table>";

include"footer.php";

?>