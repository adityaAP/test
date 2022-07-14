<?php 
include 'koneksi.php';
		$tanggal_kegiatan	= $_POST['tanggal'];
		$jumlah_modul		= $_POST['jumlah_modul'];
		$sample_periksa		= $_POST['sample_periksa'];
		$harus_periksa		= $_POST['harus_periksa'];
		$sample_terima		= $_POST['sample_terima'];
		$sisa_sample		= $_POST['sisa_saldo'];


$insert  = mysqli_query($kon,"INSERT INTO input_sample (tanggal_kegiatan, jumlah_modul, sample_periksa, harus_periksa, sample_terima, sisa_sample) VALUES ('$tanggal_kegiatan','$jumlah_modul','$sample_periksa','$harus_periksa','$sample_terima','$sisa_sample')");

if($insert){
	header("location:index.php?pesan=input");
}else{
	echo $insert;
}

?>