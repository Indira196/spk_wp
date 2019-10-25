<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Tentang_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Kriteria
        public function listTentang() {
            $this->db->select('*');
            $this->db->from('tentang');
            $this->db->order_by('tentang_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function createTentang($data) {
            $this->db->insert('tentang',$data);
        }

        public function delete($tentang_id){
        $data = array('tentang_id' => $tentang_id);
        $this->mTentang->deleteTentang($data);
        $this->session->set_flashdata('sukses','Success');
        redirect(base_url('admin/tentang/'));
    }
}
?>