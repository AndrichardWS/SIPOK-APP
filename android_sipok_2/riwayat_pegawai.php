<?php  

	 include_once 'include/koneksi.php';

	 

	 $id=$_GET["id_pengguna"];
	 $hasil         = mysqli_query($con, "SELECT tbl_permohonan.nip_pegawai,tbl_permohonan.id_permohonan,tbl_permohonan.status, tbl_permohonan.jam_keluar, tbl_permohonan.tanggal_keluar, tbl_permohonan.jam_masuk, tbl_permohonan.tanggal_masuk, tbl_permohonan.keperluan, tbl_permohonan.tujuan FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai WHERE tbl_pegawai.id_pengguna='$id'");


	 $response = array();
	 
	if(mysqli_num_rows($hasil)> 0){
	 while ($row = mysqli_fetch_array($hasil)) {
	 	array_push($response, array(
	 		'id_permohonan'=>$row['id_permohonan'],
	 		'nip_pegawai' =>$row['nip_pegawai'],
	 		'jam_keluar' =>$row['jam_keluar'],
	 		'tanggal_keluar' => $row['tanggal_keluar'],
	 		'jam_masuk' => $row['jam_masuk'],
	 		'tanggal_masuk' => $row['tanggal_masuk'],
	 		'keperluan' => $row['keperluan'],
	 		'tujuan' => $row['tujuan'],
	 		'status' => $row['status']
	 			)
	 		 );
	 }
		echo json_encode(array("data"=>$response,"code"=>1,"message"=>"Sukses"));

		
		
	    


	 }else{
	echo json_encode(array("data"=>$response,"code"=>0,"message"=>"Failed"));
	 }
	




	 mysqli_close($con);
	

?>
