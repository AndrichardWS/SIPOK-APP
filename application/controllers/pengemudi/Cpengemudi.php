<?php

class Cpengemudi extends SessionPengemudi_Controller {


	public function index(){

		$x['permohonan'] = $this->db->get('tbl_permohonan')->num_rows();
        $x['pengemudi'] = $this->db->get('tbl_master_pengemudi')->num_rows();
        $x['kendaraan'] = $this->db->get('tbl_master_kendaraan')->num_rows();
        $x['service'] = $this->db->get('tbl_service_kendaraan')->num_rows();

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

		$this->template->load('pengemudi/_vtemplate_pengemudi','pengemudi/_vpengemudi_dashboard', $x);
	}




}