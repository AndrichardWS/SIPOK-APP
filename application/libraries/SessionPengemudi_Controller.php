<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SessionPengemudi_Controller extends CI_Controller {

	public function __construct() {
        Parent::__construct();
        if ($this->session->userdata('level')=="") {
            redirect('Clogin');
        } elseif ($this->session->userdata('level')=="Pengemudi") {
            // redirect('pengemudi/Cpengemudi');
        } elseif ($this->session->userdata('level')=="Satpam") {
            redirect('satpam/Csatpam');
        } elseif ($this->session->userdata('level')=="Administrator") {
            redirect('admin/Cadmin');
        } else {
            redirect('Clogin');
        }
    }


}

?>