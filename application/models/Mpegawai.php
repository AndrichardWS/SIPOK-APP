<?php

class Mpegawai extends Ci_Model {

	//Tampil Data permohonan
	public function tampil_pegawai(){
       	$hasil=$this->db->query("SELECT * FROM tbl_pegawai INNER JOIN tbl_pengguna ON tbl_pegawai.id_pengguna=tbl_pengguna.id_pengguna");
		return $hasil;
    }

    		//Tampil Data pegawai per fungsi
	public function tampil_pegawai_per_fungsi($carifungsi){
       	$hasil=$this->db->query("SELECT * FROM tbl_pegawai WHERE kd_fungsi='$carifungsi'");
		return $hasil;
	}


    public function detail_pegawai($nip_pegawai){

    	$hasil=$this->db->query("SELECT * FROM tbl_pegawai INNER JOIN tbl_pengguna ON tbl_pegawai.id_pengguna=tbl_pengguna.id_pengguna INNER JOIN tbl_master_fungsi ON tbl_pegawai.kd_fungsi=tbl_master_fungsi.kd_fungsi WHERE nip_pegawai='$nip_pegawai'");
		return $hasil;


    }


	public function tampil_riwayat_pangkat($nip_pegawai){
       	$hasil=$this->db->query("SELECT * FROM tbl_riwayat_pangkat INNER JOIN tbl_master_pangkat ON tbl_riwayat_pangkat.kd_pangkat=tbl_master_pangkat.kd_pangkat WHERE nip_pegawai='$nip_pegawai'");
		return $hasil;
    }



    function get_data_pegawai_bynip($nip_pegawai){

    	$hsl=$this->db->query("SELECT * FROM tbl_pegawai WHERE nip_pegawai='$nip_pegawai'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {	
				$hasil=array(
					'nip_pegawai' => $data->nip_pegawai,
					'nama_pegawai' => $data->nama_pegawai,
					
					);
			}
		}
		return $hasil;
    }



    // Tambah Data
	function tambah_data($nip_pegawai,$nama_pegawai,$tempat_lahir,$tanggal_lahir,$alamat,$jenis_kelamin,$no_telp,$email,$kd_fungsi,$gambar,$id_pengguna){

	    $hasil=$this->db->query("INSERT INTO tbl_pegawai(nip_pegawai,nama_pegawai,tempat_lahir,tanggal_lahir,alamat,jenis_kelamin,no_telp,email,kd_fungsi,foto,id_pengguna) VALUES ('$nip_pegawai','$nama_pegawai','$tempat_lahir','$tanggal_lahir','$alamat','$jenis_kelamin','$no_telp','$email','$kd_fungsi','$gambar','$id_pengguna') ");
		return $hasil;

	}


	
	// Tambah Data user pegawai
	function tambah_data_pengguna($username,$password){

		$hasil=$this->db->query("INSERT INTO tbl_pengguna(username,password) VALUES ('$username','$password') ");
		return $hasil;

	}


	//Edit Data
	public function edit_data($nip_pegawai,$nama_pegawai,$tempat_lahir,$tanggal_lahir,$alamat,$jenis_kelamin,$no_telp,$email,$kd_fungsi,$gambar,$id_pengguna){

		$hasil=$this->db->query("UPDATE tbl_pegawai SET nama_pegawai='$nama_pegawai',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',alamat='$alamat',jenis_kelamin='$jenis_kelamin',no_telp='$no_telp',email='$email',kd_fungsi='$kd_fungsi',foto='$gambar',id_pengguna='$id_pengguna' WHERE nip_pegawai='$nip_pegawai'");
		return $hsl;

	}

		//Edit Data user pegawai
	public function edit_data_pengguna($id_pengguna,$username){

		$hasil=$this->db->query("UPDATE tbl_pengguna SET username='$username' WHERE id_pengguna='$id_pengguna'");
		return $hsl;

	}


			//Reset password pegawai
	public function reset_pass($id_pengguna,$password){

		$hasil=$this->db->query("UPDATE tbl_pengguna SET password='$password' WHERE id_pengguna='$id_pengguna'");
		return $hsl;

	}


		// CEK DATA
    function check_data($tbl,$data) {
        $query = $this->db->get_where($tbl, $data);       
        return $query;
    }


    public function buat_kode_riwayat(){

		  $this->db->select('RIGHT(tbl_riwayat_pangkat.id_riwayat_pangkat,4) as kode', FALSE);
		  $this->db->order_by('id_riwayat_pangkat','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tbl_riwayat_pangkat');      //cek dulu apakah ada sudah ada kode di tabel.    
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
		  $kodejadi = "IRP".$kodemax;
		  return $kodejadi;  
	}



            // Tambah Data pangkat
	public function tambah_data_pangkat($id_riwayat_pangkat,$nip_pegawai,$no_sk_pangkat,$tanggal_sk_pangkat,$kd_pangkat){

	    $hasil=$this->db->query("INSERT INTO tbl_riwayat_pangkat(id_riwayat_pangkat,nip_pegawai,no_sk_pangkat,tanggal_sk_pangkat,kd_pangkat) VALUES ('$id_riwayat_pangkat','$nip_pegawai','$no_sk_pangkat','$tanggal_sk_pangkat','$kd_pangkat') ");

		return $hasil;

	}


			//Edit Data pangkat
	public function edit_data_pangkat($id_riwayat_pangkat,$nip_pegawai,$no_sk_pangkat,$tanggal_sk_pangkat,$kd_pangkat){

		$hasil=$this->db->query("UPDATE tbl_riwayat_pangkat SET nip_pegawai='$nip_pegawai',no_sk_pangkat='$no_sk_pangkat',tanggal_sk_pangkat='$tanggal_sk_pangkat',kd_pangkat='$kd_pangkat' WHERE id_riwayat_pangkat='$id_riwayat_pangkat'");
		return $hsl;

	}


				//	Hapus Data
	public function hapus_data_pangkat($id_riwayat_pangkat){

	    $this->db->where('id_riwayat_pangkat',$id_riwayat_pangkat);
	    $this->db->delete('tbl_riwayat_pangkat');
    } 



}