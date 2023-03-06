<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
    public $table = 'artikel';
    public $id = 'artikel.id_artikel';
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
        $query = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel DESC");
        return $query->result_array();
    }
    public function getView()
    {
        $query = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 1");
        return $query->result_array();
    }
    public function getID($id)
    {
        $query = $this->db->query("SELECT * FROM artikel WHERE id_artikel = '$id'");
        return $query->result_array();
    }
    public function getEdit($id)
    {
        return $this->db->get_where('artikel', ['id_artikel' => $id])->row_array();
    }
    public function getById($id)
    {
        $query = $this->db->query("SELECT * FROM artikel WHERE id_artikel = $id");
        return $query->result_array();
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
    public function searchArtikel($keyword){
        $this->db->like('judul', $keyword);
        $result = $this->db->get('artikel')->result(); // Tampilkan data berita berdasarkan keyword
        return $result; 
      }
      public function get_keyword($keyword) {
        // $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.judul LIKE '$keyword'");
        // return $query->result_array();
        // $this->db->select('i.*, m.namaMenu');
        $this->db->from('artikel a');
        $this->db->like('a.judul', $keyword);
        // $this->db->join('menu m', 'i.idMenu = m.idMenu');
        return $this->db->get()->result_array();
    }
}
