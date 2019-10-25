<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {
	
	
	// Main Page
	public function index() {

		$site = $this->mConfig->list_config();
		$alternatif = $this->mAlternatif->listAlternatif();
		$data = array(	'title'			=> 'Alternatif - '.$site['namaweb'],
						'alternatif'	=> $alternatif,
						'isi'			=> 'admin/alternatif/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Create alternatif
	public function create() {
		
		$site 	  	= $this->mConfig->list_config();
		$alternatif   = $this->mAlternatif->listAlternatif();

		
		$v = $this->form_validation;
		$v->set_rules('id_alternatif','required');
		$v->set_rules('alternatif','Alternatif','required');

		if($v->run() === FALSE) {
				
		$data = array(	
						'site'			=> $site,
						'alternatif'	=> $alternatif,
						'isi'			=> 'admin/alternatif/create');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;

			$data = array( 	'id_alternatif'	=> $i->post('id_alternatif'),
							'user_id'		=> $this->session->userdata('id'),
							'alternatif' 	=> $i->post('alternatif'),
						);
			$this->mAlternatif->createAlternatif($data);
			$this->session->set_flashdata('sukses','Success');
			redirect(base_url('admin/alternatif/'));
		}

		//Default page
		$data = array( 	'alternatif'	=> $alternatif,
						'isi'		=> 'admin/alternatif/create');
		$this->load->view('admin/layout/wrapper',$data);
	}

	//Edit alternatif
	public function edit($id_alternatif){

		$alternatif = $this->mAlternatif->detailAlternatif($id_alternatif);
		$site	  = $this->mConfig->list_config();

		//validasi
		$valid = $this->form_validation;
		$valid->set_rules('alternatif','Alternatif','required');

		if($valid->run() === FALSE){

			$data = array(	'alternatif' 	=> $alternatif,
							'isi' 			=> 'admin/alternatif/edit');
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'id_alternatif'	=> $alternatif['id_alternatif'],
							'user_id'		=> $this->session->userdata('id'),
							'alternatif' 	=> $i->post('alternatif'),
						);
			$this->mAlternatif->editAlternatif($data);
			$this->session->set_flashdata('sukses','Success');
			redirect(base_url('admin/alternatif/'));
		}

	}
	
	// Delete alternatif
	public function delete($id_alternatif){
		$data = array('id_alternatif' => $id_alternatif);
		$this->mAlternatif->deleteAlternatif($data);
		$this->session->set_flashdata('sukses','Success');
		redirect(base_url('admin/alternatif/'));
	}
		
}?>