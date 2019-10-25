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

	public function create(){
	// Simpan data hitung
	$site 			= $this->mConfig->list_config();
	$kriteria 		= $this->mKriteria->listKriteria();
	$alternatif 	= $this->mAlternatif->listAlternatif();
	$subkriteria 	= $this->mSubkriteria->listSubkriteria();

	$v = $this->form_validation;
	$v->set_rules('keterangan', 'Kriteria','required');

	if($v->run() === FALSE){

		$data = array( 	'title'		=> 'Penyakit Anggrek - '.$site['namaweb'],
						'kriteria'		=> $kriteria,
						'sub_kriteria' 	=> $subkriteria,
						'alternatif' 	=> $alternatif,
						'isi'			=> 'front/jenisPenyakit/list');
		$this->load->view('front/layout/wrapper',$data);
	}else{
		$i = $this->input;

		$data = array( 	'id_kriteria'	=> $i->post('id_kriteria'),
						'user_id'		=> $this->session->userdata('id'),
						'id_sub' 		=> $i->post('id_sub'),
						'id_alternatif' => $i->post('id_alternatif'),
						'nilai_bobot'	=> $i->post('nilai_bobot'),
					);

		$this->mPerhitungan->createPerhitungan($data);
		$this->session->set_flashdata('sukses','Sukses');
		redirect(base_url('front/jenisPenyakit/'));
	}
	// Default Page
	$data = array( 	'kriteria'		=> $kriteria,
					'sub_kriteria' 	=> $subkriteria,
					'alternatif' 	=> $alternatif,
					'isi'			=> 'front/jenisPenyakit/list');
	$this->load->view('front/layout/wrapper',$data);
	}
}