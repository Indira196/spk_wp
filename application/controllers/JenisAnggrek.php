<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class JenisAnggrek extends CI_Controller {
	
	// Main Page Profile
	public function index() {
		$site  		= $this->mConfig->list_config();
		$anggrek 	= $this->mAnggrek->listAnggrek();
		$data =array(	'title'		=> 'Jenis Anggrek - '.$site['namaweb'],
						'site'		=> $site,
						'anggrek'	=> $anggrek,
						'isi'		=> 'front/gambarAnggrek/list');
		$this->load->view('front/layout/wrapper',$data);
	}

}