<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Kriteria_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Kriteria
        public function listKriteria() {
            $this->db->select('*');
            $this->db->from('kriteria');
            $this->db->join('admins','admins.admin_id = kriteria.user_id','LEFT');
            $this->db->order_by('kriteria','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Create Kriteria
        public function createKriteria($data) {
            $this->db->insert('kriteria',$data);
        }

        // Detail Kriteria
        public function detailKriteria($id_kriteria) {
            $this->db->select('*');
            $this->db->from('kriteria');
            $this->db->where('id_kriteria',$id_kriteria);
            $this->db->order_by('id_kriteria','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

        //Edit Kriteria
        public function editKriteria($data){
            $this->db->where('id_kriteria',$data['id_kriteria']);
            $this->db->update('kriteria',$data);
        }

        //Delete Kriteria
        public function deleteKriteria($data){
            $this->db->where('id_kriteria',$data['id_kriteria']);
            $this->db->delete('kriteria',$data);
        }
}