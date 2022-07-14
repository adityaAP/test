<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Tanggal kegiatan</td>
				<td><input type="date-mask" name="tanggal kegiatan"></td>					
			</tr>	
			<tr>
				<td>Jumlah Modul</td>
				<td><input type="text" name="jumlah modul"></td>					
			</tr>	
			<tr>
				<td>sample di periksa</td>
				<td><input type="text" name="sample periksa"></td>					
			</tr>	
			<tr>
				<td>sample harus di periksa</td>
				<td><input type="text" name="harus periksa"></td>
			</tr>
			<tr>
				<td>sample terima</td>
				<td><input type="text" name="sample terima"></td>
			</tr>
			<tr>
				<td>sisa sample</td>
				<td><input type="text" name="sisa sample"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>