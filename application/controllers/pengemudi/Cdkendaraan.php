<?php

class Cdkendaraan extends SessionPengemudi_Controller {


	public function index(){

		$x['data']=$this->Mkendaraan->tampil_kendaraan();
		$this->template->load('pengemudi/_vtemplate_pengemudi','pengemudi/_vpengemudi_dkendaraan', $x);
	}


			// Tambah
	public function tambah_kendaraan(){


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



		$no_polisi=$this->input->post('no_polisi');
		$id_jenis_kendaraan=$this->input->post('id_jenis_kendaraan');
		$nama_kendaraan=$this->input->post('nama_kendaraan');

		$merk_kendaraan=$this->input->post('merk_kendaraan');
		$tahun_produksi=$this->input->post('tahun_produksi');
		$warna_kendaraan=$this->input->post('warna_kendaraan');
		$no_rangka=$this->input->post('no_rangka');
		$no_mesin=$this->input->post('no_mesin');
		$no_bpkb=$this->input->post('no_bpkb');

		$this->Mkendaraan->tambah_data($no_polisi,$id_jenis_kendaraan,$nama_kendaraan,$merk_kendaraan,$tahun_produksi,$warna_kendaraan,$no_rangka,$no_mesin,$no_bpkb,$gambar);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DISIMPAN <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('pengemudi/Cdkendaraan');
	}

			// Edit
	public function edit_kendaraan(){


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



		$no_polisi=$this->input->post('no_polisi');
		$id_jenis_kendaraan=$this->input->post('id_jenis_kendaraan');
		$nama_kendaraan=$this->input->post('nama_kendaraan');

		$merk_kendaraan=$this->input->post('merk_kendaraan');
		$tahun_produksi=$this->input->post('tahun_produksi');
		$warna_kendaraan=$this->input->post('warna_kendaraan');
		$no_rangka=$this->input->post('no_rangka');
		$no_mesin=$this->input->post('no_mesin');
		$no_bpkb=$this->input->post('no_bpkb');

		$this->Mkendaraan->edit_data($no_polisi,$id_jenis_kendaraan,$nama_kendaraan,$merk_kendaraan,$tahun_produksi,$warna_kendaraan,$no_rangka,$no_mesin,$no_bpkb,$gambar);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('pengemudi/Cdkendaraan');

	}

			// Hapus
	public function hapus_kendaraan($no_polisi){

	    $this->Mkendaraan->hapus_data($no_polisi);

	    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIHAPUS <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	    redirect('pengemudi/Cdkendaraan');
    }
}
