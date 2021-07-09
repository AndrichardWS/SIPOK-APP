<?php

class Mrekapitulasi extends Ci_Model {

    // HITUNG JUMLAH BARIS
    function get_n($id1)
    {
        $query = $this->db->query("SELECT
                                        * 
                                    FROM
                                        " . $id1);
        return $query->num_rows();
    }


	function get_jmlfungsi(){

		$sql = "SELECT COUNT(kd_fungsi) as n FROM tbl_pegawai";
        return $this->db->query($sql)->result();
	}

    function get_jmljk(){

        $sql = "SELECT SUM(jenis_kelamin='Laki-laki') as nlaki, SUM(jenis_kelamin='Perempuan') as nperem FROM tbl_pegawai";
        return $this->db->query($sql)->result();
    }

    function get_jmlpangkat($kd_pangkat){

        $sql = "SELECT COUNT(kd_pangkat) as n FROM tbl_riwayat_pangkat INNER JOIN tbl_pegawai ON tbl_riwayat_pangkat.nip_pegawai=tbl_pegawai.nip_pegawai WHERE kd_pangkat='$kd_pangkat'";
        return $this->db->query($sql)->result();
    }

    function get_jmljk_per_fungsi($kd_fungsi){
        $sql = "SELECT COUNT(kd_fungsi) as n FROM tbl_pegawai WHERE kd_fungsi='$kd_fungsi'";
        return $this->db->query($sql)->result();

    }

    function get_jmljk_per_jk_per_fungsi($kd_fungsi){
        $sql = "SELECT SUM(jenis_kelamin='Laki-laki') as nlaki, SUM(jenis_kelamin='Perempuan') as nperem FROM tbl_pegawai WHERE kd_fungsi='$kd_fungsi'";
        return $this->db->query($sql)->result();

    }

    function get_jmlpangkat_per_pangkat_per_fungsi($kd_fungsi,$kd_pangkat){
        $sql = "SELECT COUNT(kd_pangkat) as n FROM tbl_riwayat_pangkat INNER JOIN tbl_pegawai ON tbl_riwayat_pangkat.nip_pegawai=tbl_pegawai.nip_pegawai WHERE kd_fungsi='$kd_fungsi' AND kd_pangkat='$kd_pangkat'";
        return $this->db->query($sql)->result();

    }

    


}