<?php

class Cservice extends SessionAdmin_Controller {


	public function index(){

		$x['tbl_kendaraan']=$this->Mkendaraan->tampil_kendaraan();
		$x['data']=$this->Mservice->tampil_service();
        $x['tbl_jenis_kendaraan']=$this->Mkendaraan->get_jenis_kendraan();
        $x['kode'] = $this->Mservice->buat_kode_service();
		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_dservice',$x);

	}


    function get_jenis_kendaraan(){

        $id_jenis_kendaraan=$this->input->post('id_jenis_kendaraan');
        $data=$this->Mkendaraan->get_kendaraan($id_jenis_kendaraan);
        echo json_encode($data);
    }


			// Tambah
	public function tambah_service(){


		//UPLOAD FOTO
		$config['upload_path']   = './assets/bukti/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name']  = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']  ='gd2';
                $config['source_image']   ='./assets/bukti/'.$gbr['file_name'];
                $config['create_thumb']   = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality']        = '60%';
                $config['width']          = 710;
                $config['height']         = 420;
                $config['new_image']      = './assets/bukti/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar=$gbr['file_name'];
            }
        } else {
            // $gambar = $this->input->post('foto_lama');
            echo "Foto yang diupload kosong";
        }


        $id_service=$this->input->post('id_service');
		$no_polisi=$this->input->post('no_polisi');
		$tanggal_service=$this->input->post('tanggal_service');
		$keterangan=$this->input->post('keterangan');
		$total_service=$this->input->post('total_service');


		$this->Mservice->tambah_data($id_service,$no_polisi,$tanggal_service,$keterangan,$gambar,$total_service);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DISIMPAN <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/Cservice');
	}


				// EDIT
	public function edit_service(){


		//UPLOAD FOTO
		$config['upload_path']   = './assets/bukti/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name']  = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']  ='gd2';
                $config['source_image']   ='./assets/bukti/'.$gbr['file_name'];
                $config['create_thumb']   = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality']        = '60%';
                $config['width']          = 710;
                $config['height']         = 420;
                $config['new_image']      = './assets/bukti/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar=$gbr['file_name'];
            }
        } else {
            $gambar = $this->input->post('foto_lama');
        }


		$id_service=$this->input->post('id_service');
		$no_polisi=$this->input->post('no_polisi');
		$tanggal_service=$this->input->post('tanggal_service');
		$keterangan=$this->input->post('keterangan');
		$total_service=$this->input->post('total_service');


		$this->Mservice->edit_data($id_service,$no_polisi,$tanggal_service,$keterangan,$gambar,$total_service);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/Cservice');
	}


			// Hapus
	public function hapus_service($id_service){

	    $this->Mservice->hapus_data($id_service);

	    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIHAPUS <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	    redirect('admin/Cservice');
    }

    // Hapus
    public function hapus_foto($id_service){

        // $id_service=$this->input->post('id_service');
        // $gambar = $this->input->post('foto_lama');

        // $path_to_file = './assets/bukti/'.$id_service;
        // unlink($path_to_file);
        // unlink(base_url("assets/bukti/".$id_service));

         $this->Mservice->hapus_foto($id_service);

         $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> GAMBAR BERHASIL DIHAPUS <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/Cservice');


    }

}