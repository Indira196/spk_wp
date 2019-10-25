<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Subkriteria_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        public function get_layanan(){
            $query = $this->db->get('kriteria');
            return $query->result_array();
        }

        // Listing Subkriteria
        public function listSubkriteria() {
            $this->db->select('*');
            $this->db->from('sub_kriteria');
            $this->db->join('admins','admins.admin_id = sub_kriteria.user_id','LEFT');
            //$this->db->join('kriteria','kriteria.kriteria = sub_kriteria.kriteria','RIGHT');
            $this->db->join('kriteria','kriteria.id_kriteria = sub_kriteria.id_kriteria','LEFT');
            $this->db->order_by('kriteria.kriteria','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Create alternatif
        public function createSubkriteria($data) {
            $this->db->insert('sub_kriteria',$data);
        }

        // Detail Alternatif
        public function detailSubkriteria($id_sub) {
            $this->db->select('*');
            $this->db->from('sub_kriteria');
            $this->db->where('id_sub',$id_sub);
            $this->db->order_by('id_sub','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

        //Edit Subkriteria
        public function editSubkriteria($data){
            $this->db->where('id_sub',$data['id_sub']);
            $this->db->update('sub_kriteria',$data);
        }

        //Delete Subkriteria
        public function deleteSubkriteria($data){
            $this->db->where('id_sub',$data['id_sub']);
            $this->db->delete('sub_kriteria',$data);
        }

        // End Gallery
        public function endSubkriteria() {
            $this->db->select('*');
            $this->db->from('sub_kriteria');
            $this->db->order_by('id_sub','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }  
}