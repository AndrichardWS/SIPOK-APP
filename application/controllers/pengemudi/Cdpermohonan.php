<?php

class Cdpermohonan extends SessionPengemudi_Controller {


	public function index(){

		$x['data']=$this->Mpermohonan->tampil_permohonan_accepted();
		$this->template->load('pengemudi/_vtemplate_pengemudi','pengemudi/_vpengemudi_dpermohonan', $x);
	}
}
