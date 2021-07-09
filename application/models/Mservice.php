<?php

class Mservice extends Ci_Model {

	//Tampil Data fungsi
	public function tampil_service(){
       	$hasil=$this->db->query("SELECT * FROM tbl_service_kendaraan INNER JOIN  tbl_master_kendaraan ON tbl_master_kendaraan.no_polisi=tbl_service_kendaraan.no_polisi INNER JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan ORDER BY tanggal_service ASC");
		return $hasil;
    }


        		//Tampil Data service per tanggal
	public function tampil_service_per_periode($dari_tgl,$sampai_tgl){
       	$hasil=$this->db->query("SELECT * FROM tbl_service_kendaraan INNER JOIN  tbl_master_kendaraan ON tbl_master_kendaraan.no_polisi=tbl_service_kendaraan.no_polisi INNER JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE tanggal_service BETWEEN '$dari_tgl' AND '$sampai_tgl'");
		return $hasil;
	}


	public function buat_kode_service(){

		  $this->db->select('RIGHT(tbl_service_kendaraan.id_service,4) as kode', FALSE);
		  $this->db->order_by('id_service','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tbl_service_kendaraan');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }

		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  // date_default_timezone_set('Asia/Jayapura');
		  //$kodejadi = "IDS".date("Y").date("m").date("d").$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  $kodejadi = "IDS".$kodemax;
		  return $kodejadi;  
	}



            // Tambah Data
	public function tambah_data($id_service,$no_polisi,$tanggal_service,$keterangan,$gambar,$total_service){

	    $hasil=$this->db->query("INSERT INTO tbl_service_kendaraan(id_service,no_polisi,tanggal_service,keterangan,bukti,total_service) VALUES ('$id_service','$no_polisi','$tanggal_service','$keterangan','$gambar','$total_service') ");

		return $hasil;

	}


			//Edit Data
	public function edit_data($id_service,$no_polisi,$tanggal_service,$keterangan,$gambar,$total_service){

		$hasil=$this->db->query("UPDATE tbl_service_kendaraan SET no_polisi='$no_polisi',tanggal_service='$tanggal_service',keterangan='$keterangan', bukti='$gambar',total_service='$total_service' WHERE id_service='$id_service'");
		return $hsl;

	}


				//	Hapus Data
	public function hapus_data($id_service){

	    $this->db->where('id_service',$id_service);
	    $this->db->delete('tbl_service_kendaraan');
    }

    				//	Hapus foto
	public function hapus_foto($id_service){

	    // $this->db->where('id_service',$id_service);
	    // unlink(base_url("assets/bukti".$bukti));
	    //  $this->db->delete('tbl_service_kendaraan', array('id_service' => $id_service));
	     $hasil= $this->db->query("UPDATE tbl_service_kendaraan SET bukti=NULL WHERE id_service='$id_service'");
	     return $hasil;

    }



    public function grafik_service_bulan(){
		$hasil= $this->db->query("SELECT DISTINCT
			(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=01)  AND (year(tanggal_service)=YEAR(NOW())))) AS Januari,

	   		(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=02) AND (year(tanggal_service)=YEAR(NOW())))) AS Februari,

	   		(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=03) AND (year(tanggal_service)=YEAR(NOW())))) AS Maret,

	    	(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=04)  AND (year(tanggal_service)=YEAR(NOW())))) AS April,

	     	(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=05)  AND (year(tanggal_service)=YEAR(NOW())))) AS Mei,

	      	(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=06)  AND (year(tanggal_service)=YEAR(NOW())))) AS Juni,

	      	(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=07)  AND (year(tanggal_service)=YEAR(NOW())))) AS Juli,

	      	(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=08)  AND (year(tanggal_service)=YEAR(NOW())))) AS Agustus,

	      	(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=09)  AND (year(tanggal_service)=YEAR(NOW())))) AS September,

	      	(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=10)  AND (year(tanggal_service)=YEAR(NOW())))) AS Oktober,

	      	(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=11)  AND (year(tanggal_service)=YEAR(NOW())))) AS November,

	   		(SELECT (COUNT(id_service) ) FROM (tbl_service_kendaraan)WHERE(   (month(tanggal_service)=12)    AND (year(tanggal_service)=YEAR(NOW())))) AS Desember

			FROM tbl_service_kendaraan GROUP BY year(tanggal_service)");

		return $hasil;
		} 

}