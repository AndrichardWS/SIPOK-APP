<?php

class Cdpermohonan extends CI_Controller {


	public function index(){

		$x['data']=$this->Mpermohonan->tampil_permohonan();
		$this->template->load('satpam/_vtemplate_satpam','satpam/_vsatpam_dpermohonan', $x);
	}
}
