<?php

class Cpengemudi extends SessionAdmin_Controller {


	public function index(){

		$x['data']=$this->Mpengemudi->tampil_pengemudi();
		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_dpengemudi', $x);
	}

	// Tambah
	public function tambah_pengemudi(){


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


		$nip_pengemudi=$this->input->post('nip_pengemudi');
		$nama_pengemudi=$this->input->post('nama_pengemudi');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$no_telp=$this->input->post('no_telp');

	

		$this->Mpengemudi->tambah_data($nip_pengemudi,$nama_pengemudi,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$no_telp,$gambar);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DISIMPAN <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/Cpengemudi');
	}

		// Edit
	public function edit_pengemudi(){

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



			$nip_pengemudi=$this->input->post('nip_pengemudi');
			$nama_pengemudi=$this->input->post('nama_pengemudi');
			$tempat_lahir=$this->input->post('tempat_lahir');
			$tanggal_lahir=$this->input->post('tanggal_lahir');
			$jenis_kelamin=$this->input->post('jenis_kelamin');
			$no_telp=$this->input->post('no_telp');


			$this->Mpengemudi->edit_data($nip_pengemudi,$nama_pengemudi,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$no_telp,$gambar);

			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/Cpengemudi');
		

	}


		// Hapus
	public function hapus_pengemudi($nip_pengemudi){

	    $this->Mpengemudi->hapus_data($nip_pengemudi);

	    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIHAPUS <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	    redirect('admin/Cpengemudi');
    }

}
