<?php

include_once "include/koneksi.php";

	class usr{}

	if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$username = $_POST["username"];
	$passwordLama = md5($_POST["password_lama"]);
	$passwordBaru = md5($_POST["password_baru"]);
	
	
	
	$query = mysqli_query($con, "SELECT * FROM tbl_pengguna WHERE username='$username' AND password='$passwordLama'");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row)){
		$update = mysqli_query($con, "UPDATE tbl_pengguna SET password='$passwordBaru' WHERE username='$username' ");

		if($update){
			$response = new usr();
			$response->success = 1;
			$response->message = "Password Anda berhasil di ubah, silahkan login dengan password baru";
			die(json_encode($response));

		}else{
			$response = new usr();
			$response->success = 0;
			$response->message = "Password Anda Gagal di ubah";
			die(json_encode($response));
		}
		
		//$response->id_pegawai = $row['id_pegawai'];
		
		
		
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "password lama salah";
		die(json_encode($response));
	}
	
	mysqli_close($con);
}

?>