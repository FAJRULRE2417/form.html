<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div>
<?php
	echo "<head><title>Validasi variabel</title></head>";
	$fp = fopen("datapendaftar.txt","a+");
	$nama = $_POST['nama'];
	$lahir = $_POST['lahir'];
	$ayah = $_POST['ayah'];
	$ibu = $_POST['ibu'];
	$nohape = $_POST['nohape'];
	$email = $_POST['email'];
	$pendidikan = $_POST['pendidikan'];
	$jurusan = $_POST['jurusan'];
	$prodi = $_POST['prodi'];
	$motivasi = $_POST['motivasi'];

	fputs($fp,"$nama|$lahir|$ayah|$ibu|$nohape|$email|$pendidikan|$jurusan|$prodi|$motivasi\n");
	fclose($fp);
	echo "<center>Data sudah kami terima sebagai Calon penghuni asrama putra UAD 2020</center>";
	echo "<center>Terima kasih</center>";
?>
<a href="index.html">Kembali ke halaman Awal</a>
</div>
</body>
</html>