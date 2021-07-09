<?php

class Mpangkat extends Ci_Model {

	//Tampil Data permohonan
	public function tampil_pangkat(){
       	$hasil=$this->db->query("SELECT * FROM tbl_master_pangkat");
		return $hasil;
    }



                // Tambah Data
	public function tambah_data($kd_pangkat,$uraian){

	    $hasil=$this->db->query("INSERT INTO tbl_master_pangkat(kd_pangkat,uraian) VALUES ('$kd_pangkat','$uraian') ");

		return $hasil;

	}



				//Edit Data
	public function edit_data($kd_pangkat,$uraian){

		$hasil=$this->db->query("UPDATE tbl_master_pangkat SET uraian='$uraian' WHERE kd_pangkat='$kd_pangkat'");
		return $hsl;

	}



}