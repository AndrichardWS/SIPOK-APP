<?php

include_once "include/koneksi.php";

class usr{}

if($_SERVER['REQUEST_METHOD']=='POST'){

	$nip_pegawai =	$_POST["nip_pegawai"];
	// $jenis_kendaraan = $_POST["jenis_kendaraan"];
	$keperluan = $_POST["keperluan"];
	$tujuan =	$_POST["tujuan"];

	if ((empty($keperluan))) {
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom keperluan tidak boleh kosong";
		die(json_encode($response));
	} else if ((empty($tujuan))) {
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom tujuan tidak boleh kosong";
		die(json_encode($response));
	} else {

		
		$query = mysqli_query($con, "INSERT INTO tbl_permohonan (nip_pegawai, keperluan, tujuan) VALUES('".$nip_pegawai."','".$keperluan."','".$tujuan."')");

		if($query){
			$id_permohonan = mysqli_insert_id($con);
			$response = new usr();
			$response->success = 1;
			$response->message = "Berhasil mendaftar";
			$response->id_permohonan = $id_permohonan;
			die(json_encode($response));
		}
		else{
			$response = new usr();
			$response->success = 0;
			$response->message = "Gagal mendaftar";
			$response->error = mysqli_error($con);
			die(json_encode($response));
		}
		
	}

	mysqli_close($con);

}

?>