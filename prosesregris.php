<?php

error_reporting(0);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "universitas";

	$conn=mysqli_connect($host, $user, $pass, $database);

	if ($koneksi) {
		$Nama 			= $_POST['nama'];
		$Nim 			= $_POST['nim'];
		$Kelas 			= $_POST['kelas'];
		$jeniskl		= $_POST['jeniskl'];
		$hobi			= $_POST['hobi'];
		$fakultas		= $_POST['fakultas'];
		$Alamat			= $_POST['alamat'];
		$pass 			= $_POST['pass'];
				
				

				
				$qry  =mysqli_query($con, "SELECT * FROM mhs WHERE nim='$nim'");
				$row	=mysqli_fetch_array($qry);


				if (isset($hobi)) {
	  					
		  					if ($fakultas == -1) {
		  					echo "<b>ERROR : </b>FAKULTAS Tidak Boleh Kosong";
			  				}
			  				else{
			  					
				  					if (!isset($jeniskl)) {
				  					echo "<b>ERROR : </b>Jenis Kelamin Tidak Boleh Kosong";
				  					}
					  				else{
						  				if (!empty($pass)) {
						  					
						  						if (!empty($nama)) {
						  							if (!empty($nim)) {
									  					if (strlen($nim)<=10) {
										  					if (is_numeric($nim) == TRUE) {
										  						if (strlen($nama)<=35) {
										  							if (preg_match("/^[a-zA-Z ]*$/",$nama)) {
										  								
										  									if ($nim !== $row['nim']) {
										  										
										  										$sql = $koneksi->query("
										  											INSERT INTO `mahasiswa`(`Nama`, `Nim`, `Kelas`, `Jenis Kelamin`, `Hobi`, `Fakultas`, `Alamat`, `Password`) VALUES  ('$Nama', '$Nim', '$Kelas', '$jeniskl', '$hobi', '$fakultas', '$Alamat', '$pass')");
										  													
										  										echo "REGISTRASI SUKSES - Silahkan <a href='login.php'>LOGIN</a>";
										  									
										  									}
												  									else{
												  										echo "<b>ERROR : </b>NIM Sudah Ada";
												  									}
												  								
												  							}
												  							else{
												  								echo "<b>ERROR : </b>NAMA Harus Karakter Huruf";
												  							}
												  						}
												  						else{
												  							echo "<b>ERROR : </b>Panjang NAMA Tidak Boleh Lebih dari 35 Digit";
												  						}
												  					}
												  					else{
												  						echo "<b>ERROR : </b>NIM Harus Karakter Angka";
												  					}
												  				}
												  				else{
												  					echo "<b>ERROR : </b>Panjang NIM Tidak Boleh Lebih dari 10 Digit";
												  				}
											  				}
											  				else{
											  					echo "<b>ERROR : </b>NIM Tidak Boleh Ada Yang Kosong";
											  				}
								  						}
								  						else{
								  							echo "<b>ERROR : </b>NAMA Tidak Boleh Kosong";
								  						}

								  				}
								  				else{
								  					echo "<b>ERROR : </b>PASSWORD Tidak Boleh Kosong";
								  				}
								  			}
						  				
					  				}
				  				
			  				}
			  				else{
			  					echo "<b>ERROR : </b>HOBI Harus Di Pilih";
			  				}
			  			}
			  			else{
			  				echo "<b>ERROR : </b>REGISTRASI GAGAL";
			  			}
			  		

						
					
?> 