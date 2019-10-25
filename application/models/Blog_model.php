<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Blog_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing blog
        public function listblog() {
            $this->db->select('*');
            $this->db->from('blog');
            $this->db->join('admins','admins.admin_id = blog.user_id','LEFT'); 
            $this->db->order_by('blog_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function listBlogPub(){
            $this->db->select('*');
            $this->db->from('blog');
            $this->db->where(array('status' => 'publish'));
            $this->db->join('admins','admins.admin_id = blog.user_id','LEFT');
            $this->db->join('kategori','kategori.kategori_id = blog.user_id','LEFT');
            $this->db->order_by('blog_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function createBlog($data){
            $this->db->insert('blog',$data);
        }

        public function detailBlog($blog_id){
            $this->db->select('*');
            $this->db->from('blog');
            $this->db->where('blog_id',$blog_id);
            $this->db->order_by('blog_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

        public function readBlog(){
            $this->db->select('*');
            $this->db->from('blog');
            $this->db->where(array('status' => 'publish'));
            $this->db->join('kategori','kategori.kategori_id = blog.kategori_id','LEFT');
            $query = $this->db->get();
            return $query->row_array();
        }

        public function editBlog($data) {
            $this->db->where('blog_id',$data['blog_id']);
            $this->db->update('blog',$data);
        }           

        public function deleteBlog($data) {
            $this->db->where('blog_id',$data['blog_id']);
            $this->db->delete('blog',$data);
        }

        public function endblog() {
            $this->db->select('*');
            $this->db->from('blog');
            $this->db->order_by('blog_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

        // Per Page blog
        public function perPageblog($limit,$start) {
            $this->db->select('*');
            $this->db->from('blog');
            $this->db->where(array('status' => 'publish'));            
            $this->db->join('kategori','kategori.kategori_id = blog.kategori_id','LEFT');
            $this->db->order_by('blog_id','ASC');
            $this->db->limit($limit,$start);
            $query = $this->db->get();
            return $query->result_array();
        }

        // Total blog
        public function totalblog() {
            $this->db->select('*');
            $this->db->from('blog');
            $this->db->where(array('status' => 'publish'));            
            $this->db->join('kategori','kategori.kategori_id = blog.kategori_id','LEFT');
            $this->db->order_by('blog_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

    }
