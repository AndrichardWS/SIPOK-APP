<?php

class Mkelola_user extends Ci_Model {

	//Tampil Data USER
	public function tampil_user(){
       	$hasil=$this->db->query("SELECT * FROM tbl_pengguna ORDER BY id_pengguna ASC");
		return $hasil;
    }

    			//Edit Data
	public function edit_data($id_pengguna,$username,$level,$status){

		$hasil=$this->db->query("UPDATE tbl_pengguna SET username='$username', level='$level', status='$status' WHERE id_pengguna='$id_pengguna'");
		return $hsl;

	}


}