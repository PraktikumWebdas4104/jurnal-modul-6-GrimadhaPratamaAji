<form method="POST">
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>
	</table><br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="submit" value="LOGIN"> &nbsp;
			<button><a href="registrasi.php">Registrasi</a></button>
	
</form>

<?php
	if (isset($_POST['submit'])) {
		session_start();

		include"koneksi.php";

		$nim = $_POST['nim'];
		$pass = $_POST['pass'];

		$sql = "SELECT nim, password FROM mahasiswa WHERE nim='$Nim'";

		$qry = mysqli_query($conn,$sql);
		$row = mysqli_fetch_row($qry);

		if ($nim == $row[0]) {
			if ($pass == $row[1]) {
				$_SESSION["berhasil_login"]=1;
        		$_SESSION["nim"]=$row[0];
        		$_SESSION["password"]=$row[1];

        		echo "SELAMAT LOGIN SUKSES";
        		
			}
			else{
				echo "MAAF PASSWORD YANG ANDA MASUKKAN SALAH";
			}
		}
		else{
			echo "MAAF NIM YANG ANDA MASUKKAN SALAH";
		}
	}
?>