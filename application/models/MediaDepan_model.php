<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MediaDepan_model extends CI_Model
{
    public $table = 'media';
    public $id = 'media.idMedia';
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
    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM media ORDER BY idMedia DESC");
        return $query->result_array();
    }
    public function getView()
    {
        $query = $this->db->query("SELECT * FROM media ORDER BY idMedia ASC LIMIT 1");
        return $query->result_array();
    }
    public function getID($id)
    {
        $query = $this->db->query("SELECT * FROM media WHERE idMedia = '$id'");
        return $query->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('media', ['idMedia' => $id])->row_array();
    }
    // public function update($id, $data) {
    //     $this->db->where('idMedia', $id);
    //     $this->db->update($this->table, $data);
    // }
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
    public function searchVideo($keyword){
        $this->db->like('judul', $keyword);
        $result = $this->db->get('media')->result(); // Tampilkan data siswa berdasarkan keyword
        return $result; 
      }
      public function get_keyword($keyword) {
        // $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.judul LIKE '$keyword'");
        // return $query->result_array();
        // $this->db->select('i.*, m.namaMenu');
        $this->db->from('media m');
        $this->db->like('m.judul', $keyword);
        // $this->db->join('menu m', 'i.idMenu = m.idMenu');
        return $this->db->get()->result_array();
    }
}