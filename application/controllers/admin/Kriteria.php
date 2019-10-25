<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {
	
	
	// Main Page
	public function index() {

		$site = $this->mConfig->list_config();
		$kriteria = $this->mKriteria->listKriteria();
		$data = array(	'title'		=> 'Kriteria - '.$site['namaweb'],
						'kriteria'	=> $kriteria,
						'isi'		=> 'admin/kriteria/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Create Kriteria
	public function create() {
		
		$site 	  	= $this->mConfig->list_config();
		$kriteria   = $this->mKriteria->listKriteria();

		
		$v = $this->form_validation;
		$v->set_rules('id_kriteria','required');
		$v->set_rules('kriteria','Kriteria','required');
		$v->set_rules('cost_benefit','cost_benefit','required');

		
		if($v->run() === FALSE) {
				
		$data = array(	
						'site'			=> $site,
						'kriteria'		=> $kriteria,
						'isi'			=> 'admin/kriteria/create');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;

			$data = array( 	'id_kriteria'	=> $i->post('id_kriteria'),
							'user_id'		=> $this->session->userdata('id'),
							'kriteria' 		=> $i->post('kriteria'),
							'range'			=> $i->post('range'),
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

	//Edit Kriteria
	public function edit($id_kriteria){

		$kriteria = $this->mKriteria->detailKriteria($id_kriteria);
		$site	  = $this->mConfig->list_config();

		//validasi
		$valid = $this->form_validation;
		$valid->set_rules('kriteria','Kriteria','required');
		$valid->set_rules('bobot','Bobot','required');

		if($valid->run() === FALSE){

			$data = array(	'kriteria' 	=> $kriteria,
							'isi' 		=> 'admin/kriteria/edit');
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'id_kriteria'	=> $kriteria['id_kriteria'],
							'user_id'		=> $this->session->userdata('id'),
							'kriteria' 		=> $i->post('kriteria'),
							'range'			=> $i->post('range'),
							'cost_benefit'	=> $i->post('cost_benefit'),
						);
			$this->mKriteria->editKriteria($data);
			$this->session->set_flashdata('sukses','Success');
			redirect(base_url('admin/kriteria/'));
		}

	}
	
	// Delete Kriteria
	public function delete($id_kriteria){
		$data = array('id_kriteria' => $id_kriteria);
		$this->mKriteria->deleteKriteria($data);
		$this->session->set_flashdata('sukses','Success');
		redirect(base_url('admin/kriteria/'));
	}
		
}?>