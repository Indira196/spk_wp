<?php
	/*
    @Copyright Indra Rukmana
    @Class Name : kontak Model
	*/
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Kontak_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing kontak
        public function listKontak() {
            $this->db->select('*');
            $this->db->from('kontak');
            $this->db->order_by('kontak_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Send Message
        public function sendMessage($data) {
            $this->db->insert('kontak',$data);
        }        

        // Detail Message
        public function detailMessage($kontak_id) {
            $this->db->select('*');
            $this->db->from('kontak');
            $this->db->where('kontak_id',$kontak_id);
            $this->db->order_by('kontak_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        } 

        // Delete Message
        public function deleteMessage($data) {
            $this->db->where('kontak_id',$data['kontak_id']);
            $this->db->delete('kontak',$data);
        }
    }
