<?php 
// session_start();
include 'koneksi.php';
		$tanggal_kegiatan	= $_POST['tanggal'];
		$jumlah_modul		= $_POST['jumlah_modul'];
		$sample_periksa		= $_POST['sample_periksa'];
		$harus_periksa		= $_POST['harus_periksa'];
		$sample_terima		= $_POST['sample_terima'];
		$sisa_sample		= $_POST['sisa_saldo'];
		$idUser = $_SESSION['id'];
		$kemarin = date('Y-m-d', strtotime('-1 day', strtotime($tanggal_kegiatan)));
		$get = "SELECT * FROM input_sample1 where tanggal = '$kemarin' AND user_id = '$idUser' ";
    	$q = mysqli_query($kon, $get);
		$data = mysqli_fetch_assoc($q);
		
		if($data!=''){
			$sisa = $data['sisa_sample'];
		}else{
			$sisa = 0;
		}
		
		$hrs_diperiksa = $_POST['sample_terima'] + $sisa;

		if($hrs_diperiksa > $sample_periksa){
			$sisasample = $hrs_diperiksa - $sample_periksa;
			$jml_periksa = $sample_periksa;
		}else{
			$jml_periksa = $hrs_diperiksa;
			$sisasample = 0;
		}

$insert  = mysqli_query($kon,"INSERT INTO input_sample1 (tanggal, jumlah_modul, sample_periksa, harus_periksa, sample_terima, sisa_sample,user_id) VALUES ('$tanggal_kegiatan','$jumlah_modul','$jml_periksa','$hrs_diperiksa','$sample_terima','$sisasample','$idUser')");

if($insert){
	header("location:dashboard.php?pesan=input");
}else{
	echo $insert;
}

?>