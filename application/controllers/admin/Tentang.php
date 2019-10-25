<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	
	// Main Page
	public function index() {
		$site = $this->mConfig->list_config();
		$tentang = $this->mTentang->listTentang();
		$data = array(	
						'title'		=> 'Management Tentang - '.$site['namaweb'],
						'tentang'	=> $tentang, 	
						'isi'		=> 'admin/tentang/list');
		$this->load->view('admin/layout/wrapper',$data);
	}
}
?>