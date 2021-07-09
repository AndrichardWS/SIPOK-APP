<?php  

	 include_once 'include/koneksi.php';

	 $jenis=$_GET["jenis_kendaraan"];
	 $hasil         = mysqli_query($con, "SELECT * FROM tbl_master_kendaraan  WHERE jenis_kendaraan='$jenis' ");

	 $json_response = array();
	 
	if(mysqli_num_rows($hasil)> 0){
	 while ($row = mysqli_fetch_array($hasil)) {
	     $json_response[] = $row;


	 }
	 echo json_encode(array('data' => $json_response));

	 // $response = new usr();
	 // $response->username = $row['username'];
	 // $response->password = $row['password'];



	 mysqli_close($con);
	} 

?>