<?php

class Mlogin extends Ci_Model {

	// CEK DATA
    function check_data($tbl,$data) {
        $query = $this->db->get_where($tbl, $data);       
        return $query;
    }

    // PANGGIL DATA
    function get_data($table, $field, $ad) {
        $sql = "SELECT * FROM " . $table ." ORDER BY " . $field . " " . $ad;
        return $this->db->query($sql)->result();
    }

    //  // PANGGIL DATA BERDASARKAN ID
    // function get_data_id($table, $field, $id, $order, $ad) {
    //     $sql = "SELECT
    //                 * 
    //             FROM
    //                 " . $table . " 
    //             WHERE
    //                 `" . $field . "` = '" . $id . "' 
    //             ORDER BY
    //                 `" . $order . "` " . $ad;
    //     return $this->db->query($sql)->result();
    // }




}