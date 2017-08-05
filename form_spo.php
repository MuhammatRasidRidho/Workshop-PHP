<?php
// lebih jelas kunjungi http://emerer.com 
// atau hubungi WA 0831 8393 2425
// M Rasid Ridho, S.Kom., M.SI.


include"konek.php"; // mengkoneksikan ke server dan database
echo"
<form method=POST action=input_spo.php>
<table>
	<tr>
		<td>No.Pendaftaran</td> <td>:</td>
		<td><input type=text name=no_pendaftaran></td>
    </tr>
    <tr>
		<td>Nama Lengkap</td> <td>:</td>
		<td><input type=text name=nama></td>
	</tr>
	<tr>
		<td>Alamat</td> <td>:</td>
		<td><input type=text name=alamat></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td> <td>:</td>
		<td><select name=jns_kelamin>
			<option value=Laki-laki>Laki-laki
			<option value=Perempuan>Perempuan
			</select>
		</td>
	</tr>
	<tr>
		<td>Agama</td> <td>:</td>
		<td><select name=agama>
			<option value=Islam>Islam
			<option value=Katolik>Katolik
			<option value=Protestan>Protestan
			<option value=Hindu>Hindu
			<option value=Budha>Budha
			<option value=Konghucu>Konghucu
			</select>
		</td>
	</tr>
	<tr>
		<td>Email</td> <td>:</td>
		<td><input type=text name=email></td>
	</tr>
	<tr>
		<td>Sekolah Asal</td> <td>:</td>
		<td><input type=text name=sekolah_asal></td>
	</tr>
	<tr>
		<td>Jurusan</td> <td>:</td>
		<td><select name=kd_jurusan>";

			//memanggil data-data yang ada pada tabel jurusan
			$q=mysqli_query($kon, "SELECT*FROM jurusan ORDER BY kd_jurusan");
									while($r=mysqli_fetch_array($q)){
		echo" <option
		value='$r[kd_jurusan]'>$r[nama_jurusan]
		</option> "; }
		echo"</select>
		</td>
		</tr>
</table>
<input type=submit value=SIMPAN>
</form>";
?>