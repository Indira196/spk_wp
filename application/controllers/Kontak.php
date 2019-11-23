<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {		

	// Main Page Kontak
	public function index() {
		
		$site  		= $this->mConfig->list_config();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama','required');
		$valid->set_rules('email','Email','required');
		$valid->set_rules('subjek','Subjek','required');
		$valid->set_rules('pesan','Pesan','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'	=> 'Kontak Kami - '.$site['namaweb'],
						'site'	=> $site,
						'isi'	=> 'front/kontak/list');
		$this->load->view('front/layout/wrapper',$data);
		}else{

			$i = $this->input;
			$data = array(	'nama'		=> $i->post('nama'),
							'email'		=> $i->post('email'),				
							'subjek'	=> $i->post('subjek'),
							'email'		=> $i->post('email'),
							'pesan'		=> $i->post('pesan'),
							'tanggal'	=> $i->post('tanggal'),
						);
			$this->mKontak->sendMessage($data);		
			$this->session->set_flashdata('sukses','Success');
			redirect(base_url('beranda'));
		}
	}	
}