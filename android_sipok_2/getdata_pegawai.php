<?php  

	 include_once 'include/koneksi.php';
	class usr{}

	
	 $id=$_GET["id_pengguna"];
	 $hasil         = mysqli_query($con, "SELECT * FROM tbl_pengguna INNER JOIN tbl_pegawai ON tbl_pengguna.id_pengguna=tbl_pegawai.id_pengguna WHERE tbl_pegawai.id_pengguna='$id' LIMIT 1");

	 
	 
	$row = mysqli_fetch_array($hasil);
	
	if (!empty($row)){
		$response = new usr();
		$response->success = 1;
		$response->message = "success";
		//$response->id_pegawai = $row['id_pegawai'];
		$response->username = $row['username'];
		$response->id_pengguna=$row['id_pengguna'];
		$response->level=$row['level'];
		$response->nip=$row['nip_pegawai'];
		$response->tempatLahir=$row['tempat_lahir'];
		$response->tanggalLahir=$row['tanggal_lahir'];
		$response->alamat=$row['alamat'];
		$response->jenisKelamin=$row['jenis_kelamin'];
		$response->noTelp=$row['no_telp'];
		$response->kdFungsi=$row['kd_fungsi'];
		$response->nama=$row['nama_pegawai'];


		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Failed";
		die(json_encode($response));
	}
	
	mysqli_close($con);



?>
