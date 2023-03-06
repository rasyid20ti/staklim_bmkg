<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public $table = 'berita';
    public $id = 'berita.id';
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
    public function getLatest()
    {
        $query = $this->db->query("SELECT * FROM berita ORDER BY id DESC");
        return $query->result_array();
    }
    public function getPressRelease()
    {
        $query = $this->db->query("SELECT * FROM berita WHERE sub = 'Press Release' ORDER BY id DESC LIMIT 2");
        return $query->result_array();
    }
    public function getDuaBerita()
    {
        $query = $this->db->query("SELECT * FROM berita WHERE sub != 'Press Release' ORDER BY id DESC LIMIT 2");
        return $query->result_array();
    }
    public function getDeskripsi() {
        // $query = $this->db->query("SELECT * FROM berita DESC ")
    }
    public function getSli()
    {
        // $id = $this->session->userdata('id');
        $this->db->select('b.*');
        $this->db->from('berita b');
        $this->db->like('b.sub', 'Sekolah Lapang Iklim');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $query = $this->db->query("SELECT * FROM berita WHERE id = $id");
        return $query->result_array();
    }
    public function getEdit($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
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
    public function searchBerita($keyword){
        $this->db->like('title', $keyword);
        $result = $this->db->get('berita')->result(); // Tampilkan data berita berdasarkan keyword
        return $result; 
      }
      public function get_keyword($keyword) {
        // $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.judul LIKE '$keyword'");
        // return $query->result_array();
        // $this->db->select('i.*, m.namaMenu');
        $this->db->from('berita b');
        $this->db->like('b.title', $keyword);
        // $this->db->join('menu m', 'i.idMenu = m.idMenu');
        return $this->db->get()->result_array();
    }
}
