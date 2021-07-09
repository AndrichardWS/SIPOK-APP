<?php

class Ckelola_user extends SessionAdmin_Controller {


	public function index(){

		$x['data']=$this->Mkelola_user->tampil_user();
		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_dkelola_user', $x);
	}


					// Edit
	public function edit_user(){

		$id_pengguna=$this->input->post('id_pengguna');
		$username=$this->input->post('username');
		$level=$this->input->post('level');
		$status=$this->input->post('status');

		$this->Mkelola_user->edit_data($id_pengguna,$username,$level,$status);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/Ckelola_user');

	}


	//reset password
	function reset_password_pegawai(){

		$id_pengguna=$this->input->post('id_pengguna');	
		// $username=$this->input->post('username');
		$password=md5($this->input->post('password'));

		$this->Mpegawai->reset_pass($id_pengguna,$password);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

			redirect('admin/Ckelola_user');



	}

}