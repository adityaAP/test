<?php 
include 'koneksi.php';
		$tanggal_kegiatan	= $_POST['tanggal'];
		$jumlah_modul		= $_POST['jumlah_modul'];
		$sample_periksa		= $_POST['sample_periksa'];
		$harus_periksa		= $_POST['harus_periksa'];
		$sample_terima		= $_POST['sample_terima'];
		$sisa_sample		= $_POST['sisa_saldo'];

		$kemarin = date('Y-m-d',strtotime('- 1 DAY'));
		$get = "SELECT * FROM input_sample where tanggal_kegiatan = '$kemarin'";
    	$q = mysqli_query($kon, $get);
		$data = mysqli_fetch_assoc($q);
		$sisa = $data['sisa_sample'];

		$hrs_diperiksa = $_POST['sample_terima'] + $sisa;
		if($hrs_diperiksa > $jumlah_modul){
			$sisa = $hrs_diperiksa - $jumlah_modul;
			$jml_periksa = $jumlah_modul;
		}else{
			$jml_periksa = $hrs_diperiksa;
			$sisa = 0;
		}

$insert  = mysqli_query($kon,"INSERT INTO input_sample (tanggal_kegiatan, jumlah_modul, sample_periksa, harus_periksa, sample_terima, sisa_sample) VALUES ('$tanggal_kegiatan','$jumlah_modul','$jml_periksa','$hrs_diperiksa','$sample_terima','$sisa')");

if($insert){
	header("location:index.php?pesan=input");
}else{
	echo $insert;
}

?>