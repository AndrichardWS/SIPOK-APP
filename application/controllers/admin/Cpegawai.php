<?php

class Cpegawai extends SessionAdmin_Controller {


	public function index(){

		$x['tbl_master_fungsi']=$this->Mfungsi->tampil_fungsi();

		//$nip_pegawai=$this->input->post('nip_pegawai');
		// $x['tbl_riwayat_pangkat']=$this->Mpegawai->tampil_riwayat_pangkat();

		$x['data']=$this->Mpegawai->tampil_pegawai();
		//$x['data']=$this->Mpegawai->get_id_pengguna();
		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_dpegawai', $x);
	}


	public function detail_pegawai($nip_pegawai){

		$x['tbl_riwayat_pangkat']=$this->Mpegawai->tampil_riwayat_pangkat($nip_pegawai);
		$x['tbl_master_fungsi']=$this->Mfungsi->tampil_fungsi();
		$x['tbl_master_pangkat']=$this->Mpangkat->tampil_pangkat();
		$x['tbl_pegawai']=$this->Mpegawai->tampil_pegawai();
		// $x['tbl_master_fungsi'] = $this->Mfungsi->tampil_fungsi()->result();

		$x['data']=$this->Mpegawai->detail_pegawai($nip_pegawai);

		$x['kode'] = $this->Mpegawai->buat_kode_riwayat();
		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_detail_pegawai', $x);


	}




	function tambah_pegawai(){

		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));


		//UPLOAD FOTO
		$config['upload_path']   = './assets/pasfoto/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name']  = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']  ='gd2';
                $config['source_image']   ='./assets/pasfoto/'.$gbr['file_name'];
                $config['create_thumb']   = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality']        = '60%';
                $config['width']          = 710;
                $config['height']         = 420;
                $config['new_image']      = './assets/pasfoto/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar=$gbr['file_name'];
            }
        } else {
            // $gambar = $this->input->post('foto_lama');
            echo "Foto yang diupload kosong";
        }


	
		$nip_pegawai=$this->input->post('nip_pegawai');
		$nama_pegawai=$this->input->post('nama_pegawai');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$alamat=$this->input->post('alamat');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$no_telp=$this->input->post('no_telp');
		$email=$this->input->post('email');
		$kd_fungsi=$this->input->post('kd_fungsi');


		// $id_pengguna = $this->db->insert_id();


		// $this->Mpegawai->tambah_data($nip_pegawai,$nama_pegawai,$tempat_lahir,$tanggal_lahir,$alamat,$jenis_kelamin,$no_telp,$email,$kd_fungsi,$id_pengguna);



		//cek username
		$username=$this->input->post('username');
		$data=array('username' => $username );
		$cek=$this->Mpegawai->check_data('tbl_pengguna',$data)->row();
		$hasil = count($cek);
		if ($hasil > 0) {
			//echo "<script>alert('Data dengan username $username sudah ada!');history.go(-1);</script>";

			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> DATA TIDAK TERSIMPAN! USERNAME SUDAH ADA!!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

			redirect('admin/Cpegawai');
		}else{


		$this->Mpegawai->tambah_data_pengguna($username,$password);

		$id_pengguna = $this->db->insert_id();
		
		$this->Mpegawai->tambah_data($nip_pegawai,$nama_pegawai,$tempat_lahir,$tanggal_lahir,$alamat,$jenis_kelamin,$no_telp,$email,$kd_fungsi,$gambar,$id_pengguna);
		

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DISIMPAN <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

			redirect('admin/Cpegawai');

		}

	}


		function edit_pegawai(){

		$id_pengguna=$this->input->post('id_pengguna');	
		$username=$this->input->post('username');
		// $password=md5($this->input->post('password'));

		$this->Mpegawai->edit_data_pengguna($id_pengguna,$username);


		//UPLOAD FOTO
		$config['upload_path']   = './assets/pasfoto/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name']  = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']  ='gd2';
                $config['source_image']   ='./assets/pasfoto/'.$gbr['file_name'];
                $config['create_thumb']   = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality']        = '60%';
                $config['width']          = 710;
                $config['height']         = 420;
                $config['new_image']      = './assets/pasfoto/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar=$gbr['file_name'];
            }
        } else {
            $gambar = $this->input->post('foto_lama');
        }


		$nip_pegawai=$this->input->post('nip_pegawai');
		$nama_pegawai=$this->input->post('nama_pegawai');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$alamat=$this->input->post('alamat');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$no_telp=$this->input->post('no_telp');
		$email=$this->input->post('email');
		$kd_fungsi=$this->input->post('kd_fungsi');

		
		$id_pengguna=$this->input->post('id_pengguna');
		
		
		$this->Mpegawai->edit_data($nip_pegawai,$nama_pegawai,$tempat_lahir,$tanggal_lahir,$alamat,$jenis_kelamin,$no_telp,$email,$kd_fungsi,$gambar,$id_pengguna);
		

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

			redirect('admin/Cpegawai');

	}


	function reset_password_pegawai(){

		$id_pengguna=$this->input->post('id_pengguna');	
		// $username=$this->input->post('username');
		$password=md5($this->input->post('password'));

		$this->Mpegawai->reset_pass($id_pengguna,$password);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

			redirect('admin/Cpegawai');



	}



			// Tambah
	public function tambah_pangkat(){

		$id_riwayat_pangkat=$this->input->post('id_riwayat_pangkat');
		$nip_pegawai=$this->input->post('nip_pegawai');
		$no_sk_pangkat=$this->input->post('no_sk_pangkat');
		$tanggal_sk_pangkat=$this->input->post('tanggal_sk_pangkat');
		$kd_pangkat=$this->input->post('kd_pangkat');

		$this->Mpegawai->tambah_data_pangkat($id_riwayat_pangkat,$nip_pegawai,$no_sk_pangkat,$tanggal_sk_pangkat,$kd_pangkat);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL [RIWAYAT PANGKAT] DISIMPAN <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/Cpegawai');
	}



				// edit
	public function edit_pangkat(){

		$id_riwayat_pangkat=$this->input->post('id_riwayat_pangkat');
		$nip_pegawai=$this->input->post('nip_pegawai');
		$no_sk_pangkat=$this->input->post('no_sk_pangkat');
		$tanggal_sk_pangkat=$this->input->post('tanggal_sk_pangkat');
		$kd_pangkat=$this->input->post('kd_pangkat');

		$this->Mpegawai->edit_data_pangkat($id_riwayat_pangkat,$nip_pegawai,$no_sk_pangkat,$tanggal_sk_pangkat,$kd_pangkat);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL [RIWAYAT PANGKAT] DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/Cpegawai');
	}


			// Hapus
	public function hapus_pangkat($id_riwayat_pangkat){

	    $this->Mpegawai->hapus_data_pangkat($id_riwayat_pangkat);

	    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIHAPUS <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	    redirect('admin/Cpegawai');
    }


}
