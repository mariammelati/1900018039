<html>
<head>
<link rel="stylesheet" type="text/css" href=""></head>
<body>
<?php
        $file="FORM.txt";
		$fp=fopen($file, "a+");

		echo "<div id='table'><h2>Tabel Data Pendaftar</h2>";
		while($data = fgets($fp, 600)){
			$pisah = explode("|", $data);
			
			echo "<table class width='50%' border='2' cellpadding='3' cellspacing='3'>";
			echo"<tr>
					<td>Nama Lengkap</td>
					<td> $pisah[0]</td>
				</tr>";
			echo"<tr>
					<td>Alamat Asal</td>
					<td> $pisah[1]</td>
				</tr>";
			echo"<tr>
					<td>Alamat Sekarang</td>
					<td> $pisah[2]</td>
				</tr>";
            echo"<tr>
					<td>Tempat lahir</td>
					<td> $pisah[3]</td>
				</tr>";
			echo"<tr>
					<td>Tanggal lahir</td>
					<td> $pisah[4]</td>
				</tr>";
			echo"<tr>
					<td>Email</td>
					<td> $pisah[5]</td>
				</tr>";
			echo"<tr>
					<td>No.HP</td>
					<td> $pisah[6]</td>
				</tr>";
			echo"<tr>
					<td>Jenis Kelamin</td>
					<td> $pisah[7]</td>
				</tr>";
			echo"<tr>
					<td>Agama</td>
					<td> $pisah[8]</td>
				</tr>";
			echo"<tr>
					<td>Kota</td>
					<td> $pisah[9]</td>
				</tr>";
			echo"<tr>
					<td>Kepanitiaan yang di Minati</td>
					<td> $pisah[10]</td>
				</tr>";
			echo"<tr>
					<td>Alasan Daftarp</td>
					<td> $pisah[11]</td>
				</tr>";

            echo "</table><br></div>";
        }

     
        ?>
</body>
</html>