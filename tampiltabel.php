<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.ablee{
			margin: auto;
		}
		.belakang{
			background: linear-gradient(to bottom, black, lightgreen);
		}
		.container{
			font-weight: bold;
			color: white;
			text-align: center;
		}
	</style>
	<title>Tampilan Tabel</title>
</head>
<body class="belakang">
<table width="200" border="1" class="ablee">
	<tr>
		<td width="100" class="container">Nama</td>
		<td width="100" class="container">Lahir</td>
		<td width="100" class="container">Ayah</td>
		<td width="100" class="container">Ibu</td>
		<td width="100" class="container">Nomor Hp</td>
		<td width="100" class="container">Email</td>
		<td width="100" class="container">Asal Sekolah</td>
		<td width="100" class="container">Jurusan</td>
		<td width="100" class="container">Prodi</td>
		<td width="100" class="container">Motivasi</td>
	</tr>
	<?php
	$fp = fopen("datapendaftar.txt", "rb");

	while (!feof($fp)) {
		$isiarray = fgets($fp);
		$isinya = explode('  ', $isiarray);
		echo "<tr><td height="119">$isinya[0]</td><td>$isinya[1]</td><td>$isinya[2]</td><td>$isinya[3]</td><td>$isinya[4]</td><td>$isinya[5]</td><td>$isinya[6]</td><td>$isinya[7]</td><td>$isinya[8]</td><td>$isinya[9]</td></tr>";
	}
	fclose($fp);
	?>
</table>
</body>
</html>