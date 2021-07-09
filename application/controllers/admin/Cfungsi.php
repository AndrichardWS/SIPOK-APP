<?php

class Cfungsi extends SessionAdmin_Controller {


	public function index(){

		$x['data']=$this->Mfungsi->tampil_fungsi();
		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_dfungsi', $x);
	}

			// Tambah
	public function tambah_fungsi(){

		$kd_fungsi=$this->input->post('kd_fungsi');
		$uraian=$this->input->post('uraian');

		$this->Mfungsi->tambah_data($kd_fungsi,$uraian);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DISIMPAN <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/Cfungsi');
	}


				// Edit
	public function edit_fungsi(){

		$kd_fungsi=$this->input->post('kd_fungsi');
		$uraian=$this->input->post('uraian');

		$this->Mfungsi->edit_data($kd_fungsi,$uraian);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/Cfungsi');

	}


}
