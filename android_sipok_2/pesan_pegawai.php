<?php

include_once "include/koneksi.php";

class usr{}

if($_SERVER['REQUEST_METHOD']=='POST'){

	$nip_pegawai =	$_POST["nip_pegawai"];
	//$nip_pengemudi =	$_POST["nip_pengemudi"];
	$no_polisi = $_POST["no_polisi"];
	$keperluan = $_POST["keperluan"];
	$tujuan =	$_POST["tujuan"];

	$cek=mysqli_query($con, "SELECT * FROM tbl_permohonan WHERE nip_pegawai='$nip_pegawai' AND jam_masuk IS NULL AND status ='Pending' ");
	$row=mysqli_num_rows($cek);

	if($row > 0){
		$response = new usr();
		$response->success = "0";
		$response->message = "Anda sedang melakukan permohonan";
		die(json_encode($response));
	}

	if ((empty($keperluan))) {
		$response = new usr();
		$response->success = "0";
		$response->message = "Kolom keperluan tidak boleh kosong";
		die(json_encode($response));
	} else if ((empty($tujuan))) {
		$response = new usr();
		$response->success = "0";
		$response->message = "Kolom tujuan tidak boleh kosong";
		die(json_encode($response));
	} else {

		
		$query = mysqli_query($con, "INSERT INTO tbl_permohonan (nip_pegawai,no_polisi, keperluan, tujuan) VALUES('".$nip_pegawai."','".$no_polisi."','".$keperluan."','".$tujuan."')");

		if($query){
			$id_permohonan = mysqli_insert_id($con);
			$response = new usr();
			$response->success = "1";
			$response->message = "Berhasil mendaftar";
			$response->id_permohonan = $id_permohonan;
			die(json_encode($response));
		}
		else{
			$response = new usr();
			$response->success = "0";
			$response->message = "Gagal mendaftar";
			$response->error = mysqli_error($con);
			die(json_encode($response));
		}
		
	}

	mysqli_close($con);

}

?>