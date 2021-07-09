<?php

include_once "include/koneksi.php";

	class usr{}

	if($_SERVER['REQUEST_METHOD']=='POST'){

	$username = $_POST["username"];
	//$nama_pegawai = $_POST["nama_pegawai"];
	$password =md5($_POST["password"]);
	$confirm_password = md5($_POST["confirm_password"]);

	if ((empty($username))) {
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom username tidak boleh kosong";
		die(json_encode($response));
	} else if ((empty($password))) {
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom password tidak boleh kosong";
		die(json_encode($response));
	} else if ((empty($confirm_password)) || $password != $confirm_password) {
		$response = new usr();
		$response->success = 0;
		$response->message = "Konfirmasi password tidak sama";
		die(json_encode($response));
	} else {
		if (!empty($username) && $password == $confirm_password){
			$num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tbl_pengguna WHERE username='".$username."'"));

			if ($num_rows == 0){
				$query = mysqli_query($con, "INSERT INTO tbl_pengguna (username, password,level) VALUES('".$username."','".$password."','Pegawai')");

				if ($query){
					$response = new usr();
					$response->success = 1;
					$response->message = "Register berhasil, silahkan login.";
					die(json_encode($response));

				} else {
					$response = new usr();
					$response->success = 0;
					$response->message = "username sudah ada";
					die(json_encode($response));
				}
			} else {
				$response = new usr();
				$response->success = 0;
				$response->message = "username sudah ada";
				die(json_encode($response));
			}
		}
	}

	mysqli_close($con);
}

?>