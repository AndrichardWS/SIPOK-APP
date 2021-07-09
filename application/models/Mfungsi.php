<?php

class Mfungsi extends Ci_Model {

	//Tampil Data fungsi
	public function tampil_fungsi(){
       	$hasil=$this->db->query("SELECT * FROM tbl_master_fungsi");
		return $hasil;
    }



            // Tambah Data
	public function tambah_data($kd_fungsi,$uraian){

	    $hasil=$this->db->query("INSERT INTO tbl_master_fungsi(kd_fungsi,uraian) VALUES ('$kd_fungsi','$uraian') ");

		return $hasil;

	}



			//Edit Data
	public function edit_data($kd_fungsi,$uraian){

		$hasil=$this->db->query("UPDATE tbl_master_fungsi SET uraian='$uraian' WHERE kd_fungsi='$kd_fungsi'");
		return $hsl;

	}




}