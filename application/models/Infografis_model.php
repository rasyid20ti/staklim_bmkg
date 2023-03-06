<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Infografis_model extends CI_Model
{
    public $table = 'infografis';
    public $id = 'infografis.idInfo';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu ORDER BY idInfo");
        return $query->result_array();
    }
    public function getView()
    {
        $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.status = '1' ORDER BY idInfo");
        return $query->result_array();
    }
    public function getID($id)
    {
        $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.idInfo = $id");
        return $query->result_array();
    }
    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM infografis ORDER BY idInfo");
        return $query->result_array();
    }
    // public function getById($id)
    // {
    //     return $this->db->get_where('infografis', ['idInfo' => $id])->row_array();
    // }
    public function getById($id)
    {
        $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.idInfo = $id");
        return $query->row_array();
    }
    public function getArahAngin()
    {
        $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.judul LIKE 'Normal Arah dan Kecepatan Angin %' ORDER BY idInfo");
        return $query->result_array();
    }

    public function search($keyword)
    {
        $this->db->like('judul', $keyword);
        $result = $this->db->get('infografis')->result(); // Tampilkan data siswa berdasarkan keyword
        return $result;
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    // public function update($id, $data) {
    //     $this->db->where('idInfo', $id);
    //     $this->db->update($this->table, $data);
    // }
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
    public function get_keyword($keyword, $topik)
    {
        // $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.judul LIKE '$keyword'");
        // return $query->result_array();
        if($keyword == '') {
            $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND menu.namaMenu = '$topik' AND infografis.status = '1' ORDER BY idInfo");
            return $query->result_array();
        } elseif($topik == '') {
            $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.judul LIKE '%$keyword%' AND infografis.status = '1' ORDER BY idInfo");
            return $query->result_array();
        }
        // $this->db->select('i.*, m.namaMenu');
        // $this->db->from('infografis i');
        // $this->db->like('i.judul', $keyword);
        // $this->db->like('m.idMenu', $topik);
        // $this->db->join('menu m', 'i.idMenu = m.idMenu');
        // return $this->db->get()->result_array();
    }
}
