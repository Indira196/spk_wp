<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	// Main Page Profile
	public function index() {
		
		$data = array(	
						'isi'		=> 'front/blog/list');
		$this->load->view('front/layout/wrapper',$data);
	}

}