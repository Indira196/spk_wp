<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	// Halaman index
	public function index() {
		
		// Validasi
		$valid 		= $this->form_validation;
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');		
		if($valid->run()) {
			$this->admin_login->login($username,$password,base_url('admin/dasbor'), base_url('login'));
		}
		// End validasi
		
		$data = array(	'title'	=> 'Login Administrator');
		$this->load->view('admin/login_view', $data);
	}
	
	// Logout
	public function logout() {
		$this->admin_login->logout();
	}
}?>