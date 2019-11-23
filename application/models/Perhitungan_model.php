<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class perhitungan_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        public function listHitung(){
            $this->db->select('*');
            $this->db->from('hitung');
            $this->db->join('admins','admins.admin_id = hitung.user_id','LEFT');
            //$this->db->join('kriteria','kriteria.kriteria = sub_kriteria.kriteria','RIGHT');
            $this->db->join('kriteria','kriteria.id_kriteria = hitung.id_kriteria','LEFT');
            $this->db->join('alternatif','alternatif.id_alternatif = hitung.id_alternatif','LEFT');
            $this->db->order_by('id_hitung','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function listKriteria(){
            $this->db->select('id_kriteria');
            $this->db->from('kriteria');
            $this->db->order_by('id_kriteria','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function listAlternatif(){
            $this->db->select('id_alternatif');
            $this->db->from('alternatif');
            $this->db->order_by('id_alternatif','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function jml_alternatif(){
            $this->db->select('*');
            $this->db->from('alternatif');
            $query = $this->db->get();
            return $query->num_rows();
        }

        public function jml_kriteria(){
            $this->db->select('*');
            $this->db->from('kriteria');
            $query = $this->db->get();
            return $query->num_rows();
    } 

    //Create Perhitungan
    public function createPerhitungan($data){
        $this->db->insert('hitung',$data);
    }     

}
