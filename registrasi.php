<form method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type ="text" name="nama" length="35"></td>
		</tr>

		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim" length="10"></td>
		</tr>
		
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="41-01">41-01
				<input type="radio" name="kelas" value="41-02">41-02
				<input type="radio" name="kelas" value="41-03">41-03
				<input type="radio" name="kelas" value="41-04">41-04
			</td>
		</tr>

		<tr>
			<td> Jenis Kelamin </td>
			<td> : </td>
			<td><input type="radio" name="jeniskl" value="Laki-laki"> Laki-laki 		
			<input type="radio" name="jeniskl" value="Perempuan">Perempuan</td>
		</tr>
		<tr> 
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="Basket">Basket
			<input type="checkbox" name="hobi" value="Berenang">Berenang
			<input type="checkbox" name="hobi" value="Musik">Musik</td>
		</tr>
		

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="1">Pilih Fakultas</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
			</select>
			</td>
		</tr>
<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea ></td>
		</tr>
		

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="passsword" name="pass"></td>
		</tr>

		<tr>
		<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>


	</table>
</form>


<?php 
if (isset($_POST['kirim'])) {
	include('prosesregris.php');
}
?>