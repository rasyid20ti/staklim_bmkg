<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buletin_model extends CI_Model
{
    public $table = 'buletin';
    public $id = 'buletin.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        // $query = $this->db->query("SELECT * FROM buletin WHERE id = $id");
        // return $query->result_array();
        return $this->db->get_where('buletin', ['id' => $id])->row_array();
    }
    public function getLatest()
    {
        $query = $this->db->query("SELECT * FROM buletin ORDER BY id DESC");
        return $query->result_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function search($keyword){
        $this->db->like('title', $keyword);
        $result = $this->db->get('buletin')->result(); // Tampilkan data siswa berdasarkan keyword
        return $result; 
      }
      public function get_keyword($keyword) {
        // $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.judul LIKE '$keyword'");
        // return $query->result_array();
        // $this->db->select('i.*, m.namaMenu');
        $this->db->from('buletin b');
        $this->db->like('b.title', $keyword);
        // $this->db->join('menu m', 'i.idMenu = m.idMenu');
        return $this->db->get()->result_array();
    }
}
