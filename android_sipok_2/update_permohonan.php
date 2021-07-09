<?php  

	 include_once 'include/koneksi.php';

	 

	 $id=$_GET["id_permohonan"];
	 $hasil         = mysqli_query($con, "UPDATE tbl_permohonan SET status='Canceled' WHERE id_permohonan='$id'");


	
	 
	if($hasil){
	 
		echo json_encode(array("code"=>1,"message"=>"Sukses"));

		
	 }else{
	echo json_encode(array("code"=>0,"message"=>"Failed"));
	 }
	




	 mysqli_close($con);
	

?>
