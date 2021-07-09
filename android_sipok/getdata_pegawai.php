<?php  

	 include_once 'include/koneksi.php';

	 $id=$_GET["id_pengguna"];
	 $hasil         = mysqli_query($con, "SELECT * FROM tbl_pengguna INNER JOIN tbl_pegawai ON tbl_pengguna.id_pengguna=tbl_pegawai.id_pengguna WHERE tbl_pegawai.id_pengguna='$id' LIMIT 1");

	 $json_response = array();
	 
	if(mysqli_num_rows($hasil)> 0){
	 while ($row = mysqli_fetch_array($hasil)) {
	     $json_response[] = $row;


	 }
	 echo json_encode(array('data pegawai' => $json_response));

	 // $response = new usr();
	 // $response->username = $row['username'];
	 // $response->password = $row['password'];



	 mysqli_close($con);
	} 

?>
