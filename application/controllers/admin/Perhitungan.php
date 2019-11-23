<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {
	
	
	// Main Page
	public function index() {

		$site = $this->mConfig->list_config();
		$kriteria = $this->mPerhitungan->listKriteria();
		$alternatif = $this->mPerhitungan->listAlternatif();
		$hitung = $this->mPerhitungan->listHitung();
		$data = array(	'title'		=> 'Perhitungan - '.$site['namaweb'],
						'kriteria'	=> $kriteria,
						'alternatif'=> $alternatif,
						'hitung'	=> $hitung,
						'isi'		=> 'admin/perhitungan/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	public function create() {
		
		$site 		= $this->mConfig->list_config();
		$kriteria 	= $this->mKriteria->listKriteria();
		$alternatif = $this->mPerhitungan->listAlternatif();
		$subkriteria = $this->mSubkriteria->listSubkriteria();
		
		$v = $this->form_validation;
		$v->set_rules('subkriteria','Subkriteria','required');
		
		if($v->run() === FALSE) {

		$data = array(	'title'			=> 'Perhitungan WP - '.$site['namaweb'],
						'site'			=> $site,
						'kriteria'		=> $kriteria,
						'subkriteria'	=> $subkriteria,
						'isi'			=> 'admin/perhitungan/create');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$i = $this->input;
				
				$data = array(	'id_kriteria'	=> $i->post('id_kriteria'),
								'user_id'		=> $this->session->userdata('id'),
								'id_sub'		=> $i->post('id_sub'),
								'id_alternatif' => $i->post('id_alternatif'),								
								'nilai_bobot'	=> $i->post('nilai_bobot'),
				 			 );
				$this->mPerhitungan->createPerhitungan($data);
				$this->session->set_flashdata('sukses','Success');
				redirect(base_url('admin/perhitungan/'));
		}
		// Default page
		$data = array(	'title'		=> 'Perhitungan WP- '.$site['namaweb'],
						'site'		=> $site,
						'kriteria'	=> $kriteria,
						'isi'		=> 'admin/perhitungan/create');
		$this->load->view('admin/layout/wrapper',$data);
	}
		
}?>