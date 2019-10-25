<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {
	
	
	// Main Page
	public function index() {

		$site = $this->mConfig->list_config();
		$kriteria = $this->mPerhitungan->listKriteria();
		$alternatif = $this->mPerhitungan->listAlternatif();
		$data = array(	'title'		=> 'Perhitungan - '.$site['namaweb'],
						'kriteria'	=> $kriteria,
						'alternatif'=> $alternatif,
						'isi'		=> 'admin/perhitungan/list');
		$this->load->view('admin/layout/wrapper',$data);
	}
		
}?>