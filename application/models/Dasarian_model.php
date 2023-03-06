<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasarian_model extends CI_Model
{
    public $table = 'dasarian';
    public $id = 'dasarian.id_dasarian';
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
        $query = $this->db->query("SELECT * FROM dasarian ORDER BY id_dasarian");
        return $query->result_array();
    }
    public function getDasarian()
    {
        $query = $this->db->query("SELECT * FROM `dasarian` WHERE kategori = 'Informasi Iklim Dasarian' ORDER BY id_dasarian");
        return $query->result_array();
    }

    public function getMusim()
    {
        $query = $this->db->query("SELECT * FROM `dasarian` WHERE kategori = 'Prakiraan Musim' ORDER BY id_dasarian");
        return $query->result_array();
    }

    public function getBulanan()
    {
        $query = $this->db->query("SELECT * FROM `dasarian` WHERE kategori = 'Informasi Iklim Bulanan' ORDER BY id_dasarian");
        return $query->result_array();
    }

    public function getView()
    {
        $query = $this->db->query("SELECT * FROM dasarian ORDER BY id_dasarian");
        return $query->result_array();
    }
    // public function getTigaView()
    // {
    //     $query = $this->db->query("SELECT * FROM visualisasi, menu WHERE visualisasi.idMenu = menu.idMenu ORDER BY idVisual DESC LIMIT 3");
    //     return $query->result_array();
    // }
    public function getID($id)
    {
        $query = $this->db->query("SELECT * FROM dasarian WHERE id_dasarian = '$id'");
        return $query->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('dasarian', ['id_dasarian' => $id])->row_array();
    }
    // public function update($id, $data) {
    //     $this->db->where('id_dasarian', $id);
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
    public function get_keyword($keyword) {
        // $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.judul LIKE '$keyword'");
        // return $query->result_array();
        // $this->db->select('v.*, m.namaMenu');
        $this->db->from('dasarian d');
        $this->db->like('d.judul', $keyword);
        // $this->db->join('menu m', 'v.idMenu = m.idMenu');
        return $this->db->get()->result_array();
    }
}