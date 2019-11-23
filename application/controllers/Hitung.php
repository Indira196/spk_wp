<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung extends CI_Controller {		

	// Main Page Kontak
	public function index() {
		
		$site  		= $this->mConfig->list_config();
		$kriteria 		= $this->mKriteria->listKriteria();
		$alternatif 	= $this->mAlternatif->listAlternatif();
		$subkriteria 	= $this->mSubkriteria->listSubkriteria();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('keterangan','Keterangan','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'	=> 'Penyakit Angrek- '.$site['namaweb'],
						'site'	=> $site,
						'kriteria'	=> $kriteria,
						'isi'	=> 'front/jenisPenyakit/list');
		$this->load->view('front/layout/wrapper',$data);
		}else{

			$i = $this->input;
			$data = array(	'id_kriteria'	=> $i->post('id_kriteria'),
							'user_id'		=> $this->session->userdata('id'),
							'id_sub' 		=> $i->post('id_sub'),
							'id_alternatif' => $i->post('id_alternatif'),
						);
			$this->mHitung->createPerhitungan($data);		
			$this->session->set_flashdata('sukses','Success');
			redirect(base_url('front/jenisPenyakit/list'));
		}
	}	
}