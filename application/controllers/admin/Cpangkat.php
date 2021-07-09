<?php

class Cpangkat extends SessionAdmin_Controller {


	public function index(){

		$x['data']=$this->Mpangkat->tampil_pangkat();
		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_dpangkat', $x);
	}



				// Tambah
	public function tambah_pangkat(){

		$kd_pangkat=$this->input->post('kd_pangkat');
		$uraian=$this->input->post('uraian');

		$this->Mpangkat->tambah_data($kd_pangkat,$uraian);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DISIMPAN <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		redirect('admin/Cpangkat');
	}




					// Edit
	public function edit_pangkat(){

		$kd_pangkat=$this->input->post('kd_pangkat');
		$uraian=$this->input->post('uraian');

		$this->Mpangkat->edit_data($kd_pangkat,$uraian);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/Cpangkat');

	}

}
