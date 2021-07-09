<?php

class Cadmin extends SessionAdmin_Controller {

	
	public function index(){


        $x['permohonan'] = $this->db->get('tbl_permohonan')->num_rows();
        $x['pegawai'] = $this->db->get('tbl_pegawai')->num_rows();
        $x['pengemudi'] = $this->db->get('tbl_master_pengemudi')->num_rows();
        $x['kendaraan'] = $this->db->get('tbl_master_kendaraan')->num_rows();

        $x['tbl_pegawai']=$this->Mpegawai->tampil_pegawai();
        $x['tbl_pengemudi']=$this->Mpengemudi->tampil_pengemudi_aktif();
        $x['tbl_kendaraan']=$this->Mkendaraan->tampil_kendaraan_tersedia();
        $x['tbl_jenis_kendaraan']=$this->Mkendaraan->get_jenis_kendraan();
        $x['data']=$this->Mpermohonan->tampil_permohonan_pending();

        foreach ($this->Mpermohonan->grafik_permohonan_fungsi()->result_array() as $row) {
            
        
        $x['grafik2'][]=(float)$row['FAES'];
        $x['grafik2'][]=(float)$row['FASPURKIPK'];
        $x['grafik2'][]=(float)$row['FDSEK'];
        $x['grafik2'][]=(float)$row['FKKK'];
        $x['grafik2'][]=(float)$row['FPPSPPUR'];
        $x['grafik2'][]=(float)$row['FPPU'];
        $x['grafik2'][]=(float)$row['SLA'];
        $x['grafik2'][]=(float)$row['UOSP'];
        }


        foreach ($this->Mpermohonan->grafik_permohonan_bulan()->result_array() as $row) {
            
        
        $x['grafik'][]=(float)$row['Januari'];
        $x['grafik'][]=(float)$row['Februari'];
        $x['grafik'][]=(float)$row['Maret'];
        $x['grafik'][]=(float)$row['April'];
        $x['grafik'][]=(float)$row['Mei'];
        $x['grafik'][]=(float)$row['Juni'];
        $x['grafik'][]=(float)$row['Juli'];
        $x['grafik'][]=(float)$row['Agustus'];
        $x['grafik'][]=(float)$row['September'];
        $x['grafik'][]=(float)$row['Oktober'];
        $x['grafik'][]=(float)$row['November'];
        $x['grafik'][]=(float)$row['Desember'];
        }


        foreach ($this->Mservice->grafik_service_bulan()->result_array() as $row) {
            
        
        $x['grafik1'][]=(float)$row['Januari'];
        $x['grafik1'][]=(float)$row['Februari'];
        $x['grafik1'][]=(float)$row['Maret'];
        $x['grafik1'][]=(float)$row['April'];
        $x['grafik1'][]=(float)$row['Mei'];
        $x['grafik1'][]=(float)$row['Juni'];
        $x['grafik1'][]=(float)$row['Juli'];
        $x['grafik1'][]=(float)$row['Agustus'];
        $x['grafik1'][]=(float)$row['September'];
        $x['grafik1'][]=(float)$row['Oktober'];
        $x['grafik1'][]=(float)$row['November'];
        $x['grafik1'][]=(float)$row['Desember'];
        }



		$this->template->load('admin/_vtemplate_admin','admin/_vadmin_dashboard', $x);
	}


            // Edit
    public function verifikasi_reject_permohonan(){

        // $formSubmit = $this->input->post('submitForm');

        // if( $formSubmit == 'terima' ){

            // $nip_pengemudi=$this->input->post('nip_pengemudi');
            // $status_peng="Tidak Aktif";

            // $this->Mpermohonan->edit_data_status_peng($nip_pengemudi,$status_peng);

            // $no_polisi=$this->input->post('no_polisi');
            // $status_kend="Tidak Tersedia";

            // $this->Mpermohonan->edit_data_status_kend($no_polisi,$status_kend);

            // $id_permohonan=$this->input->post('id_permohonan');
            // $nip_pegawai=$this->input->post('nip_pegawai');
            // $nip_pengemudi=$this->input->post('nip_pengemudi');
            // $no_polisi=$this->input->post('no_polisi');
            // $keperluan=$this->input->post('keperluan');
            // $tujuan=$this->input->post('tujuan');
            // // $status=$this->input->post('accepted');

            // $status = "Accepted";

            // $this->Mpermohonan->edit_data($id_permohonan,$nip_pegawai,$nip_pengemudi,$no_polisi,$keperluan,$tujuan,$status);

            // $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIVERIFIKASI. . . <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            // redirect('admin/Cadmin');

        // }else{

            // $nip_pengemudi=$this->input->post('nip_pengemudi');
            // $status_peng="Aktif";

            // $this->Mpermohonan->edit_data_status_peng($nip_pengemudi,$status_peng);

            // $no_polisi=$this->input->post('no_polisi');
            // $status_kend="Tersedia";

            // $this->Mpermohonan->edit_data_status_kend($no_polisi,$status_kend);

            $id_permohonan=$this->input->post('id_permohonan');
            $nip_pegawai=$this->input->post('nip_pegawai');
            // $nip_pengemudi=$this->input->post('nip_pengemudi');
            // $no_polisi=$this->input->post('no_polisi');
            $keperluan=$this->input->post('keperluan');
            $tujuan=$this->input->post('tujuan');
            // $status=$this->input->post('rejected');

            $status = "Rejected";

            $this->Mpermohonan->verifikasi_reject_data($id_permohonan,$nip_pegawai,$keperluan,$tujuan,$status);

            $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIREJECTED. . . <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/Cadmin');

        // }

    }



                // Edit
    public function verifikasi_accept_permohonan(){

           $nip_pengemudi=$this->input->post('nip_pengemudi');
            $status_peng="Tidak Aktif";

            $this->Mpermohonan->edit_data_status_peng($nip_pengemudi,$status_peng);

            $no_polisi=$this->input->post('no_polisi');
            $status_kend="Tidak Tersedia";

            $this->Mpermohonan->edit_data_status_kend($no_polisi,$status_kend);

            $id_permohonan=$this->input->post('id_permohonan');
            $nip_pegawai=$this->input->post('nip_pegawai');
            $nip_pengemudi=$this->input->post('nip_pengemudi');
            $no_polisi=$this->input->post('no_polisi');
            $keperluan=$this->input->post('keperluan');
            $tujuan=$this->input->post('tujuan');

            $status = "Accepted";

            $this->Mpermohonan->edit_data($id_permohonan,$nip_pegawai,$nip_pengemudi,$no_polisi,$keperluan,$tujuan,$status);

            $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIVERIFIKASI. . . <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/Cadmin');


    }


}
