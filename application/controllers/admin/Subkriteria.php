<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subkriteria extends CI_Controller {
	
	
	// Main Page
	public function index() {

		$site = $this->mConfig->list_config();
		$subkriteria = $this->mSubkriteria->listSubkriteria();
		$kriteria = $this->mSubkriteria->get_layanan();
		$data = array(	'title'			=> 'Subkriteria - '.$site['namaweb'],
						'kriteria'		=> $kriteria,
						'subkriteria'	=> $subkriteria,
						'isi'		=> 'admin/subkriteria/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	
	// Create Gallery
	public function create() {
		
		$site 		= $this->mConfig->list_config();
		$kriteria 	= $this->mKriteria->listKriteria();

		
		$v = $this->form_validation;
		$v->set_rules('keterangan','Keterangan','required');
		
		if($v->run() === FALSE) {

		$data = array(	'title'			=> 'Subkriteria - '.$site['namaweb'],
						'site'			=> $site,
						'kriteria'		=> $kriteria,
						'isi'			=> 'admin/subkriteria/create');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$i = $this->input;
				
				$data = array(	'id_kriteria'	=> $i->post('id_kriteria'),
								'user_id'		=> $this->session->userdata('id'),
								'keterangan'	=> $i->post('keterangan'),								
								'nilai_bobot'	=> $i->post('nilai_bobot'),
				 			 );
				$this->mSubkriteria->createSubkriteria($data);
				$this->session->set_flashdata('sukses','Success');
				redirect(base_url('admin/subkriteria/'));
		}
		// Default page
		$data = array(	'title'			=> 'Subkriteria - '.$site['namaweb'],
						'site'		=> $site,
						'kriteria'	=> $kriteria,
						'isi'		=> 'admin/subkriteria/create');
		$this->load->view('admin/layout/wrapper',$data);
	}
		// Create Kriteria
	public function kriteria() {
		
		$site 	  	= $this->mConfig->list_config();
		$kriteria   = $this->mKriteria->listKriteria();

		
		$v = $this->form_validation;
		$v->set_rules('id_kriteria','required');
		$v->set_rules('kriteria','Kriteria','required');
		$v->set_rules('bobot','Bobot','required');
		$v->set_rules('cost_benefit','cost_benefit','required');

		
		if($v->run() === FALSE) {
				
		$data = array(	'title'			=> 'Subkriteria - '.$site['namaweb'],
						'site'			=> $site,
						'kriteria'		=> $kriteria,
						'isi'			=> 'admin/subkriteria/create');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;

			$data = array( 	'id_kriteria'	=> $i->post('id_kriteria'),
							'user_id'		=> $this->session->userdata('id'),
							'kriteria' 		=> $i->post('kriteria'),
							'range'			=> $i->post('range'),
							'bobot'			=> $i->post('bobot'),
							'cost_benefit'	=> $i->post('cost_benefit'),
						);
			$this->mKriteria->createKriteria($data);
			$this->session->set_flashdata('sukses','Success');
			redirect(base_url('admin/kriteria/'));
		}

		//Default page
		$data = array( 	'kriteria'	=> $kriteria,
						'isi'		=> 'admin/kriteria/create');
		$this->load->view('admin/layout/wrapper',$data);
	}

	//Edit subkriteria
	public function edit($id_sub){

		$site 	  	= $this->mConfig->list_config();
		$subkriteria = $this->mSubkriteria->detailSubkriteria($id_sub);
		$endsubkriteria = $this->mSubkriteria->endSubkriteria();
		$kriteria	  = $this->mKriteria->listKriteria();

		//validasi
		$valid = $this->form_validation;
		$valid->set_rules('nilai bobot','Bobot','required');

		if($valid->run() === FALSE){

			$data = array(	'title'			=> 'Subkriteria - '.$site['namaweb'],
							'kriteria'		=> $kriteria,
							'subkriteria'	=> $subkriteria,
							'isi' 			=> 'admin/subkriteria/edit');
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
				$data = array(	'id_sub'		=> $subkriteria['id_sub'],
								'id_kriteria'	=> $i->post('id_kriteria'),
								'user_id'		=> $this->session->userdata('id'),
								'keterangan'	=> $i->post('keterangan'),								
								'nilai_bobot'	=> $i->post('nilai_bobot'),
				 			 );
				$this->mSubkriteria->editSubkriteria($data);
				$this->session->set_flashdata('sukses','Success');
				redirect(base_url('admin/subkriteria/'));
		}
	}
	
	// Delete subkriteria
	public function delete($id_sub){
		$data = array('id_sub' => $id_sub);
		$this->mSubkriteria->deleteSubkriteria($data);
		$this->session->set_flashdata('sukses','Success');
		redirect(base_url('admin/subkriteria/'));
	}
		
}?>