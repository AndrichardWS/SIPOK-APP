<?php

class Mpermohonan extends Ci_Model {


	//Tampil Data permohonan
	public function tampil_permohonan(){
       	$hasil=$this->db->query("SELECT * FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai LEFT JOIN tbl_master_pengemudi ON tbl_permohonan.nip_pengemudi=tbl_master_pengemudi.nip_pengemudi LEFT JOIN tbl_master_kendaraan ON tbl_permohonan.no_polisi=tbl_master_kendaraan.no_polisi LEFT JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan ORDER BY id_permohonan ASC");
		return $hasil;
	}


			//Tampil Data permohonan pending
	public function tampil_permohonan_pending(){
       	$hasil=$this->db->query("SELECT * FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai LEFT JOIN tbl_master_pengemudi ON tbl_permohonan.nip_pengemudi=tbl_master_pengemudi.nip_pengemudi LEFT JOIN tbl_master_kendaraan ON tbl_permohonan.no_polisi=tbl_master_kendaraan.no_polisi LEFT JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE status='Pending' ORDER BY id_permohonan DESC");
		return $hasil;
	}


			//Tampil Data permohonan accept
	public function tampil_permohonan_accepted(){
       	$hasil=$this->db->query("SELECT * FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai LEFT JOIN tbl_master_pengemudi ON tbl_permohonan.nip_pengemudi=tbl_master_pengemudi.nip_pengemudi LEFT JOIN tbl_master_kendaraan ON tbl_permohonan.no_polisi=tbl_master_kendaraan.no_polisi LEFT JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE status='Accepted' ORDER BY id_permohonan DESC");
		return $hasil;
	}


		//Tampil Data permohonan per periode Keluar
	public function tampil_permohonan_periode_keluar($dari_tgl,$sampai_tgl,$status){
       	$hasil=$this->db->query("SELECT * FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai LEFT JOIN tbl_master_pengemudi ON tbl_permohonan.nip_pengemudi=tbl_master_pengemudi.nip_pengemudi LEFT JOIN tbl_master_kendaraan ON tbl_permohonan.no_polisi=tbl_master_kendaraan.no_polisi LEFT JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE tanggal_keluar BETWEEN '$dari_tgl' AND '$sampai_tgl' AND status='$status'");
		return $hasil;
	}


	//Tampil Data permohonan per periode Masuk
	public function tampil_permohonan_periode_masuk($dari_tgl,$sampai_tgl,$status){
       	$hasil=$this->db->query("SELECT * FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai LEFT JOIN tbl_master_pengemudi ON tbl_permohonan.nip_pengemudi=tbl_master_pengemudi.nip_pengemudi LEFT JOIN tbl_master_kendaraan ON tbl_permohonan.no_polisi=tbl_master_kendaraan.no_polisi LEFT JOIN tbl_jenis_kendaraan ON tbl_master_kendaraan.id_jenis_kendaraan=tbl_jenis_kendaraan.id_jenis_kendaraan WHERE tanggal_masuk BETWEEN '$dari_tgl' AND '$sampai_tgl' AND status='$status'");
		return $hasil;
	}




	public function grafik_permohonan_bulan(){
		$hasil= $this->db->query("SELECT DISTINCT
			(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=01)  AND (year(tanggal_keluar)=YEAR(NOW())))) AS Januari,

	   		(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=02) AND (year(tanggal_keluar)=YEAR(NOW())))) AS Februari,

	   		(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=03) AND (year(tanggal_keluar)=YEAR(NOW())))) AS Maret,

	    	(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=04)  AND (year(tanggal_keluar)=YEAR(NOW())))) AS April,

	     	(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=05)  AND (year(tanggal_keluar)=YEAR(NOW())))) AS Mei,

	      	(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=06)  AND (year(tanggal_keluar)=YEAR(NOW())))) AS Juni,

	      	(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=07)  AND (year(tanggal_keluar)=YEAR(NOW())))) AS Juli,

	      	(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=08)  AND (year(tanggal_keluar)=YEAR(NOW())))) AS Agustus,

	      	(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=09)  AND (year(tanggal_keluar)=YEAR(NOW())))) AS September,

	      	(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=10)  AND (year(tanggal_keluar)=YEAR(NOW())))) AS Oktober,

	      	(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=11)  AND (year(tanggal_keluar)=YEAR(NOW())))) AS November,

	   		(SELECT (COUNT(id_permohonan) ) FROM (tbl_permohonan)WHERE(   (month(tanggal_keluar)=12)    AND (year(tanggal_keluar)=YEAR(NOW())))) AS Desember

			FROM tbl_permohonan GROUP BY year(tanggal_keluar)");

		return $hasil;
		}

	public function grafik_permohonan_fungsi(){

		$hasil= $this->db->query("SELECT DISTINCT
			(SELECT COUNT(id_permohonan) FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai WHERE kd_fungsi='FAES' AND status='Accepted') AS FAES,
            (SELECT COUNT(id_permohonan) FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai WHERE kd_fungsi='FASPURKIPK' AND status='Accepted') AS FASPURKIPK,
            (SELECT COUNT(id_permohonan) FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai WHERE kd_fungsi='FDSEK' AND status='Accepted') AS FDSEK,
            (SELECT COUNT(id_permohonan) FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai WHERE kd_fungsi='FKKK' AND status='Accepted') AS FKKK,
            (SELECT COUNT(id_permohonan) FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai WHERE kd_fungsi='FPPSPPUR' AND status='Accepted') AS FPPSPPUR,
            (SELECT COUNT(id_permohonan) FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai WHERE kd_fungsi='FPPU' AND status='Accepted') AS FPPU,
            (SELECT COUNT(id_permohonan) FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai WHERE kd_fungsi='SLA' AND status='Accepted') AS SLA,
            (SELECT COUNT(id_permohonan) FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai WHERE kd_fungsi='UOSP' AND status='Accepted') AS UOSP FROM tbl_permohonan");
			return $hasil;

		}


	// }

		// $hasil=$this->db->select('*');
		// $hasil=$this->db->from('tbl_permohonan');
		// $hasil=$this->db->join('tbl_pegawai', 'tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai', 'inner');
		// return $hasil;

		 // $this->db->select('*');
		 // $this->db->from('tbl_permohonan');
		 // $this->db->join('tbl_pegawai','tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai');
		 // $this->db->where('tbl_pegawai.id_pengguna');
		 // $query = $this->db->get();
		 // return $query->result();

		// 	$hasil=$this->db->query("SELECT * FROM tbl_permohonan INNER JOIN tbl_pegawai ON tbl_permohonan.nip_pegawai=tbl_pegawai.nip_pegawai INNER JOIN tbl_master_pengemudi ON tbl_permohonan.nip_pengemudi=tbl_master_pengemudi.nip_pengemudi INNER JOIN tbl_master_kendaraan ON tbl_permohonan.no_polisi=tbl_master_kendaraan.no_polisi");
		// return $hasil;

				// CEK DATA
    function check_data($tbl,$data) {
        $query = $this->db->get_where($tbl, $data);       
        return $query;
    }


 
        // Tambah Data
	public function tambah_data($nip_pegawai,$nip_pengemudi,$no_polisi,$keperluan,$tujuan,$status){

	    $hasil=$this->db->query("INSERT INTO tbl_permohonan(nip_pegawai,nip_pengemudi,no_polisi,keperluan,tujuan,status) VALUES ('$nip_pegawai','$nip_pengemudi','$no_polisi','$keperluan','$tujuan','$status') ");

		return $hasil;

	}


			//Edit Data
	public function edit_data($id_permohonan,$nip_pegawai,$nip_pengemudi,$no_polisi,$keperluan,$tujuan,$status){

		$hasil=$this->db->query("UPDATE tbl_permohonan SET nip_pegawai='$nip_pegawai',nip_pengemudi='$nip_pengemudi',no_polisi='$no_polisi',keperluan='$keperluan',tujuan='$tujuan',status='$status' WHERE id_permohonan='$id_permohonan'");
		return $hsl;

	}

				//Edit Data
	public function verifikasi_reject_data($id_permohonan,$nip_pegawai,$keperluan,$tujuan,$status){

		$hasil=$this->db->query("UPDATE tbl_permohonan SET nip_pegawai='$nip_pegawai',nip_pengemudi=NULL,no_polisi=NULL,keperluan='$keperluan',tujuan='$tujuan',status='$status' WHERE id_permohonan='$id_permohonan'");
		return $hsl;

	}

	public function edit_data_status_kend($no_polisi,$status_kend){

		$hasil=$this->db->query("UPDATE tbl_master_kendaraan SET status_kend='$status_kend' WHERE no_polisi='$no_polisi'");
		return $hsl;

	}

	public function edit_data_status_peng($nip_pengemudi,$status_peng){

		$hasil=$this->db->query("UPDATE tbl_master_pengemudi SET status_peng='$status_peng' WHERE nip_pengemudi='$nip_pengemudi'");
		return $hsl;

	}


			//Edit Data satpam
	public function edit_data_satpam($id_permohonan,$jam_keluar,$tanggal_keluar,$jam_masuk,$tanggal_masuk){

		$hasil=$this->db->query("UPDATE tbl_permohonan SET jam_keluar='$jam_keluar',tanggal_keluar='$tanggal_keluar',jam_masuk='$jam_masuk',tanggal_masuk='$tanggal_masuk' WHERE id_permohonan='$id_permohonan'");
		return $hsl;

	}


		//	Hapus Data
	public function hapus_data($id_permohonan){

	    $this->db->where('id_permohonan',$id_permohonan);
	    $this->db->delete('tbl_permohonan');
    } 




}