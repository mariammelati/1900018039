<html>
<head>
<link rel="stylesheet" type="text/css" href=""></head>
<body>
<div>
<?php 
$file="FORM.txt";
$fp =fopen($file,"a+");
    $Nama=$_POST["nama"];
    $Almat_Asal=$_POST["alasal"];
    $Alamat_Sekarang=$_POST["alasek"]; 
    $Tempat_lahir=$_POST["lahir"]; 
    $Tanggal_lahir=$_POST["tgl"]; 
    $Email=$_POST["email"];
    $No_Hp=$_POST["hp"];
    $Jenis_Kelamin=$_POST["jk"];
    $Agama=$_POST["agama"]; 
    $Kota=$_POST["kota"];
    $Kepanitiaan_yang_di_Minati=$_POST["minat"]; 
    $Alasan_Daftar=$_POST["reason"]; 


fputs($fp,"$Nama|$Almat_Asal|$Alamat_Sekarang|$Tempat_lahir|$Tanggal_lahir|$Email|$No_Hp|$Jenis_Kelamin|$Agama|$Kota|$Kepanitiaan_yang_di_Minati|$Alasan_Daftar\n");
fclose($fp);
echo "<center><br>";
echo '<h1 class="h1">Terima Kasih Telah Mendaftar</h1><br>';
echo "&nbsp";
echo '<a class="tombol" href=tampil.php>Tabel Data</a>';
echo "</center>";

?>
</div>
</body>
</html>