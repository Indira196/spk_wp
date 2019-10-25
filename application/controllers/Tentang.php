<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	
	// Main Page Profile
	public function index() {
			
		$site = $this->mConfig->list_config();
		$data = array(	'title'		=> 'Tentang - '.$site['namaweb'],
						'site'		=> $site,
						'isi'		=> 'front/tentang/list');
		$this->load->view('front/layout/wrapper',$data);
	}

	
}