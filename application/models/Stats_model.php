<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}

	// Stat Admins
	public function admins() {
		$query = $this->db->get('admins');
		return $query->num_rows();	
	}
	public function anggrek() {
		$query = $this->db->get('anggrek');
		return $query->num_rows();	
	}	


}