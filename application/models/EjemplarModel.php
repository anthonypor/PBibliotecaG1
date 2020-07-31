<?php
class Categoria extends CI_Model {

    public $table = 'categoria';
    public $table_id = 'cate_id';

    public function __construct() {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('categoria');
        $this->load->library('form_validation');
        $this->load->database('');
    }
    function find($id) {

        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);

        $query = $this->db->get();
        return $query->row();
    }

    function findAll() {
        
        $this->db->select();
        $this->db->from($this->table);

        $query = $this->db->get();
        return $query->result();
    }

    function insert($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    function update($id, $data) {
        $this->db->where($this->table_id, $id);
        $this->db->update($this->table, $data);
    }

    function delete($id) {
        $this->db->where($this->table_id, $id);
        $this->db->update($this->table);
    }

}