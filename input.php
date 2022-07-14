<?php
	include 'koneksi.php';
	
		$tanggal_kegiatan	= $_POST['tanggal_kegiatan'];
		$jumlah_modul		= $_POST['jumlah_modul'];
		$sample_periksa		= $_POST['sample_periksa'];
		$harus_periksa		= $_POST['harus_periksa'];
		$sample_terima		= $_POST['sample_terima'];
		$sisa_sample		= $_POST['sisa_sample'];
	
	$query="INSERT INTO input_sample SET tanggal_kegiatan='$tanggal_kegiatan',jumlah_modul='$jumlah_modul',sampe_periksa='$sample_periksa',harus_periksa='$harus_periksa',sample_terima='$sample_terima',sisa-sample='$sisa_sample'";
	mysql_query($koneksi, $query);
	
	header("location:input_sample.php");
?>