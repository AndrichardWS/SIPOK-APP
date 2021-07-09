<?php

class Clogin1 extends CI_Controller {

	public function index(){


		if (isset($_SESSION['level'])) {
			if ($_SESSION['level'] == "Administrator") {
				redirect('admin/Cadmin');
			} elseif ($_SESSION['level'] == "Pengemudi") {
				redirect('pengemudi/Cpengemudi');
			} elseif ($_SESSION['level'] == "Satpam") {
				redirect('satpam/Csatpam');
			}
		} 

		$this->load->view('_vlogin');

	}


	function cek_login() {

		// if (isset($_SESSION['level'])) {
		// 	if ($_SESSION['level'] == "Administrator") {
		// 		redirect('admin/Cadmin');
		// 	} elseif ($_SESSION['level'] == "Pengemudi") {
		// 		redirect('pengemudi/Cpengemudi');
		// 	} elseif ($_SESSION['level'] == "Satpam") {
		// 		redirect('satpam/Csatpam');
		// 	}
		// } 

		$username = $this->input->post("username",true);
        $password = $this->input->post("password",true);

        $data_cek_login= array(
        	'username' =>$username,
        	'password' => md5($password)
        );

        $cek_login_user = $this->Mlogin->check_data('tbl_pengguna',$data_cek_login)->row();
        $hasil = count($cek_login_user);

        if ($hasil > 0) {
        	
        	if ($cek_login_user->level == 'Administrator' && $cek_login_user->status == 'Aktif') {
        		
        		$sess_data['username'] = $cek_login_user->username;
        		$sess_data['level'] = $cek_login_user->level;
        		$sess_data['status'] = $cek_login_user->status;


        		//$sess_data['status_login'] = 'Active';

        		$this->session->set_userdata($sess_data);

        		redirect('admin/Cadmin');
        		
        	} elseif ($cek_login_user->level == 'Pengemudi' && $cek_login_user->status == 'Aktif'){

        		$sess_data['username'] = $cek_login_user->username;
        		$sess_data['level'] = $cek_login_user->level;
        		$sess_data['status'] = $cek_login_user->status;


        		//$sess_data['status_login'] = 'Active';

        		$this->session->set_userdata($sess_data);

        		redirect('pengemudi/Cpengemudi');

        	} elseif ($cek_login_user->level == 'Satpam' && $cek_login_user->status == 'Aktif'){

        		$sess_data['username'] = $cek_login_user->username;
        		$sess_data['level'] = $cek_login_user->level;
        		$sess_data['status'] = $cek_login_user->status;


        		//$sess_data['status_login'] = 'Active';

        		$this->session->set_userdata($sess_data);

        		redirect('satpam/Cadmin');

        	}elseif ($cek_login_user->level == 'Pegawai' && $cek_login_user->status == 'Aktif'){

        		$this->session->set_flashdata('notif','<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4>Username & Password anda salah</div>');
				redirect('Clogin');

        	}else{

        		$this->session->set_flashdata('notif','<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4>Akun anda belum diaktifkan! Segera hubungi administrator . . .</div>');
				redirect('Clogin');

        	}



        }else{

        	$this->session->set_flashdata('notif','<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4>Username & Password anda salah</div>');
			redirect('Clogin');

        }


   //       if($cek_login_user->num_rows() == 1){
   //         // echo "admin";

   //       	foreach ($cek_login_user->result() as $sess) {

			// 		$sess_data['id_pengguna']     	= $sess->id_pengguna;
			// 		$id_pengguna 					= $sess->id_pengguna;
			// 		$sess_data['username']			= $sess->username;
			// 		$username						= $sess->username;

			// 		$sess_data['level']				= $sess->level;
			// 		$level							= $sess->level;

			// 		$sess_data['status']			= $sess->status;
			// 		$status							= $sess->status;

			// 		// $sess_data['status_login']		= 'active';

			// 	}

   //         $this->session->set_userdata($sess_data);

           
			// if ($sess_data['level'] == "Administrator") {
			// 		redirect('admin/Cadmin');
			// 	} elseif ($sess_data['level'] == "Pengemudi") {
			// 		redirect('pengemudi/Cpengemudi');
			// 	} elseif ($sess_data['level'] == "Satpam") {
			// 		redirect('satpam/Csatpam');
			// 	} elseif ($sess_data['level'] == "Pegawai") {

			// 		$this->session->set_flashdata('notif','<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4>Username & Password anda salah</div>');
			// 		redirect('Clogin');
			// 	}
          


   //  	}else{

   //  		$this->session->set_flashdata('notif','<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4>Username & Password anda salah</div>');
			// redirect('Clogin');
			// //redirect($_SERVER['REQUEST_URI'], 'refresh');


   //  	}

	}



	public function logout() {


		session_destroy();
		redirect(base_url());

		// setTimeout(function(), {
		// location.href = 'logout.php';
		// }, 3000);
	}







}