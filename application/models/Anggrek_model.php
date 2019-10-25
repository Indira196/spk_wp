<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Anggrek_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Anggrek
        public function listAnggrek() {
            $this->db->select('*');
            $this->db->from('anggrek');
            $this->db->join('admins','admins.admin_id = anggrek.user_id','LEFT');
            $this->db->order_by('anggrek_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }              

        // Create Anggrek
        public function createAnggrek($data) {
            $this->db->insert('anggrek',$data);
        }

        // Detail Anggrek
        public function detailAnggrek($anggrek_id) {
            $this->db->select('*');
            $this->db->from('anggrek');
            $this->db->where('anggrek_id',$anggrek_id);
            $this->db->order_by('anggrek_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        } 

        // Per Page Berita
        public function perPageAnggrek($limit,$start) {
            $this->db->select('*');
            $this->db->from('anggrek');
            $this->db->where(array('status' => 'publish'));
            $this->db->order_by('kategori_id','ASC');
            $this->db->limit($limit,$start);
            $query = $this->db->get();
            return $query->result_array();
        }

        // Edit Anggrek
        public function editAnggrek($data) {
            $this->db->where('anggrek_id',$data['anggrek_id']);
            $this->db->update('anggrek',$data);
        }           

        // Delete Anggrek
        public function deleteAnggrek($data) {
            $this->db->where('anggrek_id',$data['anggrek_id']);
            $this->db->delete('anggrek',$data);
        }        

        // End Anggrek
        public function endAnggrek() {
            $this->db->select('*');
            $this->db->from('anggrek');
            $this->db->order_by('anggrek_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }              

    }
