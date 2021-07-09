<?php

class Mkendaraan extends Ci_Model {

	//Tampil Data permohonan
	public function tampil_kendaraan(){
       	$hasil=$this->db->query("SELECT * FROM tbl_master_kendaraan INNER JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE no_polisi != 'PA000001' AND no_polisi != 'PA000002'");
		return $hasil;
    }

    //Tampil Data kendaraan tersedia
	public function tampil_kendaraan_tersedia(){
       	$hasil=$this->db->query("SELECT * FROM tbl_master_kendaraan INNER JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE no_polisi != 'PA000001' AND no_polisi != 'PA000002' AND status_kend='Tersedia'");
		return $hasil;
    }

  //   public function tampil_jenis_kendaraan(){
  //      	$hasil=$this->db->query("SELECT DISTINCT tbl_master_kendaraan.jenis_kendaraan FROM tbl_master_kendaraan");
		// return $hasil;
  //   }


        function get_jenis_kendraan(){
        $hasil=$this->db->query("SELECT * FROM tbl_jenis_kendaraan");
        return $hasil;
    }

        function get_kendaraan_tersedia($id_jenis_kendaraan){
        $hasil=$this->db->query("SELECT * FROM tbl_master_kendaraan WHERE id_jenis_kendaraan='$id_jenis_kendaraan' AND no_polisi != 'PA000001' AND no_polisi != 'PA000002' AND status_kend='Tersedia'");
        return $hasil->result();
    }


            function get_kendaraan($id_jenis_kendaraan){
        $hasil=$this->db->query("SELECT * FROM tbl_master_kendaraan WHERE id_jenis_kendaraan='$id_jenis_kendaraan' AND no_polisi != 'PA000001' AND no_polisi != 'PA000002'");
        return $hasil->result();
    }

     function get_data_kendaraan_bynopolisi($no_polisi){

    	$hsl=$this->db->query("SELECT * FROM tbl_master_kendaraan WHERE no_polisi='$no_polisi'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {	
				$hasil=array(
					'no_polisi' => $data->no_polisi,
					'nama_kendaraan' => $data->nama_kendaraan,
					
					);
			}
		}
		return $hasil;
    }


  //        function get_data_kendaraan_byjeniskendaraan($jenis_kendaraan){

  //   	$hsl=$this->db->query("SELECT * FROM tbl_master_kendaraan WHERE id_jenis_kendaraan='$jenis_kendaraan'");
		// if($hsl->num_rows()>0){
		// 	foreach ($hsl->result() as $data) {	
		// 		$hasil=array(
		// 			'id_jenis_kendaraan' => $data->id_jenis_kendaraan,
		// 			'no_polisi' => $data->no_polisi,
					
		// 			);
		// 	}
		// }
		// return $hasil;
  //   }



        // Tambah Data
	public function tambah_data($no_polisi,$id_jenis_kendaraan,$nama_kendaraan,$merk_kendaraan,$tahun_produksi,$warna_kendaraan,$no_rangka,$no_mesin,$no_bpkb,$gambar){

	    $hasil=$this->db->query("INSERT INTO tbl_master_kendaraan(no_polisi,id_jenis_kendaraan,nama_kendaraan,merk_kendaraan,tahun_produksi,warna_kendaraan,no_rangka,no_mesin,no_bpkb,foto) VALUES ('$no_polisi','$id_jenis_kendaraan','$nama_kendaraan','$merk_kendaraan','$tahun_produksi','$warna_kendaraan','$no_rangka','$no_mesin','$no_bpkb','$gambar') ");

		return $hasil;

	}


		//Edit Data
	public function edit_data($no_polisi,$id_jenis_kendaraan,$nama_kendaraan,$merk_kendaraan,$tahun_produksi,$warna_kendaraan,$no_rangka,$no_mesin,$no_bpkb,$gambar){

		$hasil=$this->db->query("UPDATE tbl_master_kendaraan SET id_jenis_kendaraan='$id_jenis_kendaraan',nama_kendaraan='$nama_kendaraan',merk_kendaraan='$merk_kendaraan',tahun_produksi='$tahun_produksi',warna_kendaraan='$warna_kendaraan',no_rangka='$no_rangka',no_mesin='$no_mesin',no_bpkb='$no_bpkb',foto='$gambar' WHERE no_polisi='$no_polisi'");
		return $hsl;

	}

			//	Hapus Data
	public function hapus_data($no_polisi){

	    $this->db->where('no_polisi',$no_polisi);
	    $this->db->delete('tbl_master_kendaraan');
    } 




}