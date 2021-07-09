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
	
	$query = mysqli_query($con, "SELECT * FROM tbl_pengguna WHERE username='$username' AND password='$password'");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row)){
		$response = new usr();
		$response->success = 1;
		$response->message = "Selamat datang ".$row['username'];
		//$response->id_pegawai = $row['id_pegawai'];
		$response->username = $row['username'];
		$response->id_pengguna=$row['id_pengguna'];
		$response->level=$row['level'];
		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "username atau password salah";
		die(json_encode($response));
	}
	
	mysqli_close($con);
}

?>