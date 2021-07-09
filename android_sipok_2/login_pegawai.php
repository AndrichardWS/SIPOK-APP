<?php

include_once "include/koneksi.php";

	class usr{}

	if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	
	if ((empty($username)) || (empty($password))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom tidak boleh kosong"; 
		die(json_encode($response));
	}
	
	$query = mysqli_query($con, "SELECT * FROM tbl_pengguna INNER JOIN tbl_pegawai ON tbl_pengguna.id_pengguna=tbl_pegawai.id_pengguna WHERE tbl_pengguna.username='$username' AND tbl_pengguna.password='$password'");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row)){
		$response = new usr();
		$response->success = 1;
		// $response->message = "Selamat datang ".$row['username'];
		$response->message = "Akun anda belum diaktifkan...";
		//$response->id_pegawai = $row['id_pegawai'];
		$response->username = $row['username'];
		$response->id_pengguna=$row['id_pengguna'];
		$response->level=$row['level'];
		$response->status=$row['status'];

		
		$response->nip = $row['nip_pegawai'];
		$response->nama = $row['nama_pegawai'];
		$response->tempatLahir = $row['tempat_lahir'];
		$response->tanggalLahir = $row['tanggal_lahir'];
		$response->alamat = $row['alamat'];
		$response->jenisKelamin = $row['jenis_kelamin'];
		$response->noTelp = $row['no_telp'];
		$response->email = $row['email'];
		$response->kdFungsi = $row['kd_fungsi'];
		
		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Username atau password salah";
		die(json_encode($response));
	}
	
	mysqli_close($con);
}

?>