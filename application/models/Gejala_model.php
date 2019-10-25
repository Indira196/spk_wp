<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Gejala_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Gejala
        public function listGejala() {
            $this->db->select('*');
            $this->db->from('gejala');
            $this->db->join('admins','admins.admin_id = gejala.user_id','LEFT');
            $this->db->order_by('gejala_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }              

        // Create Gejala
        public function createGejala($data) {
            $this->db->insert('gejala',$data);
        }

        // Detail Gejala
        public function detailGejala($gejala_id) {
            $this->db->select('*');
            $this->db->from('gejala');
            $this->db->where('gejala_id',$Gejala_id);
            $this->db->order_by('gejala_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        } 

        // Edit Gejala
        public function editGejala($data) {
            $this->db->where('gejala_id',$data['gejala_id']);
            $this->db->update('gejala',$data);
        }           

        // Delete Gejala
        public function deleteGejala($data) {
            $this->db->where('gejala_id',$data['gejala_id']);
            $this->db->delete('gejala',$data);
        }        

        // End Gejala
        public function endGejala() {
            $this->db->select('*');
            $this->db->from('gejala');
            $this->db->order_by('gejala_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }              

    }
