<?php

class Mpengemudi extends Ci_Model {

	//Tampil Data permohonan
	public function tampil_pengemudi(){
       	$hasil=$this->db->query("SELECT * FROM tbl_master_pengemudi");
		return $hasil;
    }

    //Tampil Data pengemudi aktif
	public function tampil_pengemudi_aktif(){
       	$hasil=$this->db->query("SELECT * FROM tbl_master_pengemudi WHERE status_peng='Aktif'");
		return $hasil;
    }


    function get_data_pengemudi_bynip($nip_pengemudi){

    	$hsl=$this->db->query("SELECT * FROM tbl_master_pengemudi WHERE nip_pengemudi='$nip_pengemudi'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {	
				$hasil=array(
					'nip_pengemudi' => $data->nip_pengemudi,
					'nama_pengemudi' => $data->nama_pengemudi,
					
					);
			}
		}
		return $hasil;
    }


    // Tambah Data
	function tambah_data($nip_pengemudi,$nama_pengemudi,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$no_telp,$gambar){

	    $hasil=$this->db->query("INSERT INTO tbl_master_pengemudi(nip_pengemudi,nama_pengemudi,tempat_lahir,tanggal_lahir,jenis_kelamin,no_telp,foto) VALUES ('$nip_pengemudi','$nama_pengemudi','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$no_telp','$gambar') ");

		return $hasil;

	}


	//Edit Data
	public function edit_data($nip_pengemudi,$nama_pengemudi,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$no_telp,$gambar){

		$hasil=$this->db->query("UPDATE tbl_master_pengemudi SET nama_pengemudi='$nama_pengemudi',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',no_telp='$no_telp', foto='$gambar' WHERE nip_pengemudi='$nip_pengemudi'");
		return $hsl;

	}


		//	Hapus Data
	public function hapus_data($nip_pengemudi){

	    $this->db->where('nip_pengemudi',$nip_pengemudi);
	    $this->db->delete('tbl_master_pengemudi');
    } 




}