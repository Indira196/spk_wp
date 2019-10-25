<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Alternatif_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Alternatif
        public function listAlternatif() {
            $this->db->select('*');
            $this->db->from('alternatif');
            $this->db->join('admins','admins.admin_id = alternatif.user_id','LEFT');
            $this->db->order_by('id_alternatif','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Create alternatif
        public function createAlternatif($data) {
            $this->db->insert('alternatif',$data);
        }

        // Detail Alternatif
        public function detailAlternatif($id_alternatif) {
            $this->db->select('*');
            $this->db->from('alternatif');
            $this->db->where('id_alternatif',$id_alternatif);
            $this->db->order_by('id_alternatif','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

        //Edit Alternatif
        public function editAlternatif($data){
            $this->db->where('id_alternatif',$data['id_alternatif']);
            $this->db->update('alternatif',$data);
        }

        //Delete Alternatif
        public function deleteAlternatif($data){
            $this->db->where('id_alternatif',$data['id_alternatif']);
            $this->db->delete('alternatif',$data);
        }
}