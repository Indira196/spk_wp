<?php
	/*
    @Copyright Indra Rukmana
    @Class Name : Contacts
	*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	
	// Inbox Contacts
	public function index() {

		$site  = $this->mConfig->list_config();
		$kontak = $this->mKontak->listKontak();
		
		$data = array(	'title'		=> 'Pesan - '.$site['namaweb'],
						'kontak'	=> $kontak,
						'isi'		=> 'admin/kontak/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Delete Message
	public function delete($kontak_id) {
		$data = array('kontak_id'	=> $kontak_id);
		$this->mKontak->deleteMessage($data);		
		$this->session->set_flashdata('sukses','Success');
		redirect(base_url('admin/kontak'));
	}	
}