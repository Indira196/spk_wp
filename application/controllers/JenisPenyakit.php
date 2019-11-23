<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class JenisPenyakit extends CI_Controller {
	
	// Main Page Profile
	public function index() {
		
		$site  		= $this->mConfig->list_config();
		$kriteria 	= $this->mKriteria->listKriteria();
		$data =array(	'title'		=> 'Penyakit Anggrek - '.$site['namaweb'],	
						'kriteria'		=> $kriteria,
						'isi'		=> 'front/jenisPenyakit/list');
		$this->load->view('front/layout/wrapper',$data);
	}
}