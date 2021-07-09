<?php

class Cpermohonan extends SessionAdmin_Controller {


	public function index(){

		$x['tbl_pegawai']=$this->Mpegawai->tampil_pegawai();
		$x['tbl_pengemudii']=$this->Mpengemudi->tampil_pengemudi();
		$x['tbl_pengemudi']=$this->Mpengemudi->tampil_pengemudi_aktif();
		$x['tbl_kendaraan']=$this->Mkendaraan->tampil_kendaraan_tersedia();
		$x['tbl_kendaraann']=$this->Mkendaraan->tampil_kendaraan();
		$x['tbl_jenis_kendaraan']=$this->Mkendaraan->get_jenis_kendraan();
		$x['data']=$this->Mpermohonan->tampil_permohonan();
		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_dpermohonan', $x);
	}

	function get_nip_pegawai(){

		$nip_pegawai=$this->input->post('nip_pegawai');
		$data=$this->Mpegawai->get_data_pegawai_bynip($nip_pegawai);
		echo json_encode($data);
	}

	function get_nip_pengemudi(){

		$nip_pengemudi=$this->input->post('nip_pengemudi');
		$data=$this->Mpengemudi->get_data_pengemudi_bynip($nip_pengemudi);
		echo json_encode($data);
	}

	function get_kendaraan(){

		$no_polisi=$this->input->post('no_polisi');
		$data=$this->Mkendaraan->get_data_kendaraan_bynopolisi($no_polisi);
		echo json_encode($data);
	}


		function get_jenis_kendaraan(){

		$id_jenis_kendaraan=$this->input->post('id_jenis_kendaraan');
		$data=$this->Mkendaraan->get_kendaraan_tersedia($id_jenis_kendaraan);
		echo json_encode($data);
	}


	// Tambah
	public function tambah_permohonan(){

		$nip_pengemudi=$this->input->post('nip_pengemudi');
        $status_peng="Tidak Aktif";

        $this->Mpermohonan->edit_data_status_peng($nip_pengemudi,$status_peng);

	    $no_polisi=$this->input->post('no_polisi');
        $status_kend="Tidak Tersedia";

        $this->Mpermohonan->edit_data_status_kend($no_polisi,$status_kend);

		$nip_pegawai=$this->input->post('nip_pegawai');
		$nip_pengemudi=$this->input->post('nip_pengemudi');
		$no_polisi=$this->input->post('no_polisi');
		// $jam_keluar=$this->input->post('jam_keluar');
		// $tanggal_keluar=$this->input->post('tanggal_keluar');
		// $jam_masuk=$this->input->post('jam_masuk');
		// $tanggal_masuk=$this->input->post('tanggal_masuk');
		$keperluan=$this->input->post('keperluan');
		$tujuan=$this->input->post('tujuan');

		$status = "Accepted";

		$this->Mpermohonan->tambah_data($nip_pegawai,$nip_pengemudi,$no_polisi,$keperluan,$tujuan,$status);

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DISIMPAN <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/Cpermohonan');

	}


		// Edit
	public function edit_permohonan(){

		$id_permohonan=$this->input->post('id_permohonan');
		$nip_pegawai=$this->input->post('nip_pegawai');
		$nip_pengemudi=$this->input->post('nip_pengemudi');
		$no_polisi=$this->input->post('no_polisi');
		// $jam_keluar=$this->input->post('jam_keluar');
		// $tanggal_keluar=$this->input->post('tanggal_keluar');
		// $jam_masuk=$this->input->post('jam_masuk');
		// $tanggal_masuk=$this->input->post('tanggal_masuk');
		$keperluan=$this->input->post('keperluan');
		$tujuan=$this->input->post('tujuan');
		$status=$this->input->post('status');


		$this->Mpermohonan->edit_data($id_permohonan,$nip_pegawai,$nip_pengemudi,$no_polisi,$keperluan,$tujuan,$status);

	

		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/Cpermohonan');

	}



	// Hapus
	public function hapus_permohonan($id_permohonan){

	    $this->Mpermohonan->hapus_data($id_permohonan);

	    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIHAPUS <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	    redirect('admin/Cpermohonan');
    }

	



}
