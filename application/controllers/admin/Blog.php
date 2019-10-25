<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	// Main Page Blogs
	public function index() {

		$site  = $this->mConfig->list_config();
		$blog = $this->mBlog->listBlog();
		
		$data = array(	'blog'	=> $blog,
						'isi'	=> 'admin/blog/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Create blog
	public function create() {
		
		$site 	  	= $this->mConfig->list_config();
		$endblog  = $this->mblog->endblog();
		
		$v = $this->form_validation;
		$v->set_rules('kategori_id','kategori blog','required');
		$v->set_rules('judul','judul blog','required');
		$v->set_rules('content','Content blog','required');
		
		if($v->run()) {
			
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']			= '80480000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('image')) {
				
		$data = array(	'judul'			=> 'Create blog - '.$site['nameweb'],
						'site'			=> $site,
						'kategori'		=> $kategori,
						'error'			=> $this->upload->display_errors(),
						'isi'			=> 'admin/blog/create');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
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
				$slug_blog = url_judul($this->input->post('judul'), 'dash', TRUE);
				$data = array(	'kategori_id'	=> $i->post('kategori_id'),
								'user_id'		=> $this->session->userdata('id'),
								'judul'			=> $i->post('judul'),
								'konten'		=> $i->post('content'),
								'tanggal_post'		=> $i->post('date_post'),
								'status'		=> $i->post('status'),
								'keywords'		=> $i->post('keywords'),
								'gambar'			=> $upload_data['uploads']['file_name']
				 			 );

				$this->mblog->createblog($data);
				$this->session->set_flashdata('sukses','Success');
				redirect(base_url('admin/blogs/'));
		}}
		// Default page
		$data = array(	'judul'		=> 'Create blog - '.$site['nameweb'],
						'site'		=> $site,
						'kategori'	=> $kategori,
						'isi'		=> 'admin/blog/create');
		$this->load->view('admin/layout/wrapper',$data);
	}	

}