<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {
	
	// Main Page Products
	public function index() {

		$site      = $this->mConfig->list_config();
		$gejala		= $this->mGejala->listGejala();
		
		$data = array(	'title'		=> 'Management Gejala - '.$site['namaweb'],
						'site'		=> $site,
						'gejala'	=> $gejala,
						'isi'		=> 'admin/gejala/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	public function create() {
		
		$site 		= $this->mConfig->list_config();
		$anggrek 	= $this->mAnggrek->listAnggrek();
		
		$v = $this->form_validation;
		$v->set_rules('anggrek_nama','Nama Anggrek','required');
		$v->set_rules('nama_latin','Nama Latin Anggrek','required');
		
		if($v->run()) {
			
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg|jpg';
			$config['max_size']			= '80480000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('image')) {
				
		$data = array(	'title'			=> 'Tambah List Anggrek - '.$site['namaweb'],
						'site'			=> $site,
						'anggrek'		=> $anggrek,
						'error'			=> $this->upload->display_errors(),
						'isi'			=> 'admin/anggrek/create');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$i = $this->input;
				$slugGallery = url_title($this->input->post('gallery_name'), 'dash', TRUE);
				$data = array(	'anggrek_id'	=> $i->post('anggrek_id'),
								'user_id'		=> $this->session->userdata('id'),
								'anggrek_nama'	=> $i->post('anggrek_nama'),
								'nama_latin'	=> $i->post('nama_latin'),							
								'tanggal'		=> $i->post('tanggal'),								
								'gambar_deskripsi' => $i->post('gambar_deskripsi'),						
								'gambar'		=> $upload_data['uploads']['file_name']
				 			 );
				$this->mAnggrek->createAnggrek($data);
				$this->session->set_flashdata('sukses','Success');
				redirect(base_url('admin/anggrek/'));
		}}
		// Default page
		$data = array(	'title'		=> 'Tambah List Anggrek - '.$site['namaweb'],
						'site'		=> $site,
						'anggrek'	=> $anggrek,
						'isi'		=> 'admin/anggrek/create');
		$this->load->view('admin/layout/wrapper',$data);
	}

	public function edit($anggrek_id) {

		$anggrek	= $this->mAnggrek->detailAnggrek($anggrek_id);
		$endAnggrek	= $this->mAnggrek->endAnggrek();		

		$v = $this->form_validation;
		$v->set_rules('anggrek_nama','Nama Anggrek','required');
		$v->set_rules('nama_latin','Nama Latin Anggrek','required');
		
		if($v->run()) {
			if(!empty($_FILES['image']['name'])) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg|jpg|jpeg';
			$config['max_size']			= '80480000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('image')) {
		
		$data = array(	'title'		=> 'Edit List Anggrek - '.$anggrek['anggrek_nama'],
						'anggrek'	=> $anggrek,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/anggrek/edit');
		$this->load->view('admin/layout/wrapper', $data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= FALSE;
				$config['width'] 			= 360; // Pixel
				$config['height'] 			= 200; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
			$i = $this->input;

			unlink('./assets/upload/image/'.$anggrek['image']);
			unlink('./assets/upload/image/thumbs/'.$anggrek['image']);

			$data = array(	'anggrek_id'	=> $anggrek['anggrek_id'],
							'user_id'		=> $this->session->userdata('id'),
							'anggrek_nama'	=> $i->post('anggrek_nama'),
							'nama_latin'	=> $i->post('nama_latin'),							
							'tanggal'		=> $i->post('tanggal'),								
							'gambar_deskripsi' => $i->post('gambar_deskripsi'),						
							'gambar'		=> $upload_data['uploads']['file_name']
							);
			$this->mAnggrek->editAnggrek($data);
			$this->session->set_flashdata('sukses','Success');
			redirect(base_url('admin/anggrek'));
		}}else{
			$i = $this->input;
			$data = array(	'anggrek_id'	=> $anggrek['anggrek_id'],
							'user_id'		=> $this->session->userdata('id'),
							'anggrek_nama'	=> $i->post('anggrek_nama'),
							'nama_latin'	=> $i->post('nama_latin'),							
							'tanggal'		=> $i->post('tanggal'),								
							'gambar_deskripsi' => $i->post('gambar_deskripsi'),
							);
			$this->mAnggrek->editAnggrek($data);
			$this->session->set_flashdata('sukses','Success');
			redirect(base_url('admin/anggrek'));			
		}}

		$data = array(	'title'		=> 'Edit List Anggrek - '.$anggrek['anggrek_nama'],
						'anggrek'	=> $anggrek,
						'isi'		=> 'admin/anggrek/edit');
		$this->load->view('admin/layout/wrapper', $data);
	}	

	public function delete($anggrek_id) {
		$data = array('anggrek_id'	=> $anggrek_id);
		$this->mAnggrek->deleteAnggrek($data);		
		$this->session->set_flashdata('sukses','Success');
		redirect(base_url('admin/anggrek'));
	}	


}