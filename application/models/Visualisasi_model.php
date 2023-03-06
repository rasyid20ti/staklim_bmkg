<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visualisasi_model extends CI_Model
{
    public $table = 'visualisasi, rerata_ph, suhu, kelembapan';
    public $table_visual = 'visualisasi';
    public $id = 'visualisasi.idVisual';
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
        $query = $this->db->query("SELECT * FROM visualisasi ORDER BY idVisual");
        return $query->result_array();
    }
    public function getView()
    {
        $query = $this->db->query("SELECT * FROM visualisasi, menu WHERE visualisasi.idMenu = menu.idMenu ORDER BY idVisual");
        return $query->result_array();
    }
    // public function getTigaView()
    // {
    //     $query = $this->db->query("SELECT * FROM visualisasi, menu WHERE visualisasi.idMenu = menu.idMenu ORDER BY idVisual DESC LIMIT 3");
    //     return $query->result_array();
    // }
    public function getID($id)
    {
        $query = $this->db->query("SELECT * FROM visualisasi, menu WHERE visualisasi.idMenu = menu.idMenu AND visualisasi.idVisual = $id");
        return $query->result_array();
    }
    public function getById($id)
    {
        $query = $this->db->query("SELECT * FROM visualisasi, menu WHERE visualisasi.idMenu = menu.idMenu AND visualisasi.idVisual = $id");
        return $query->row_array();
        // return $this->db->get_where('visualisasi', ['idVisual' => $id])->row_array();
    }
    // public function update($id, $data) {
    //     $this->db->where('idVisual', $id);
    //     $this->db->update($this->table, $data);
    // }
    public function update($where, $data)
    {
        $this->db->update($this->table_visual, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table_visual, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table_visual);
        return $this->db->affected_rows();
    }

    public function get_keyword($keyword, $topik) {
        // $query = $this->db->query("SELECT * FROM infografis, menu WHERE infografis.idMenu = menu.idMenu AND infografis.judul LIKE '$keyword'");
        // return $query->result_array();
        if($keyword == '') {
            $query = $this->db->query("SELECT * FROM visualisasi, menu WHERE visualisasi.idMenu = menu.idMenu AND menu.namaMenu = '$topik' ORDER BY idVisual");
            return $query->result_array();
        } elseif($topik == '') {
            $query = $this->db->query("SELECT * FROM visualisasi, menu WHERE visualisasi.idMenu = menu.idMenu AND visualisasi.judul LIKE '%$keyword%' ORDER BY idVisual");
            return $query->result_array();
        }
        
    }

    public function getCH()
	{
		$this->db->select('ph.*, s.nomor_pos as nomor_pos, s.lintang as lintang, s.bujur as bujur, s.nama_pos as nama_pos, k.nama_kecamatan as kecamatan, kab.nama_kabupaten as kabupaten');
        $this->db->from('rerata_ph ph');
        $this->db->join('alat s', 'ph.id_pos = s.nomor_pos');
		$this->db->join('kabupaten kab', 's.kabupaten = kab.id_kabupaten');
		$this->db->join('kecamatan k', 's.kecamatan = k.id');
		// $this->db->where('h.id_periode', $id);
        $query = $this->db->get();
        return $query->result_array();
	}

    public function getSuhu()
	{
		$this->db->select('sh.*, s.nomor_pos as nomor_pos, s.lintang as lintang, s.bujur as bujur, s.nama_pos as nama_pos, k.nama_kecamatan as kecamatan, kab.nama_kabupaten as kabupaten');
        $this->db->from('suhu sh');
        $this->db->join('alat s', 'sh.id_pos = s.nomor_pos');
		$this->db->join('kabupaten kab', 's.kabupaten = kab.id_kabupaten');
		$this->db->join('kecamatan k', 's.kecamatan = k.id');
		// $this->db->where('h.id_periode', $id);
        $query = $this->db->get();
        return $query->result_array();
	}
    public function getKelembaban()
	{
		$this->db->select('kb.*, s.nomor_pos as nomor_pos, s.lintang as lintang, s.bujur as bujur, s.nama_pos as nama_pos, k.nama_kecamatan as kecamatan, kab.nama_kabupaten as kabupaten');
        $this->db->from('kelembapan kb');
        $this->db->join('alat s', 'kb.id_pos = s.nomor_pos');
		$this->db->join('kabupaten kab', 's.kabupaten = kab.id_kabupaten');
		$this->db->join('kecamatan k', 's.kecamatan = k.id');
		// $this->db->where('h.id_periode', $id);
        $query = $this->db->get();
        return $query->result_array();
	}
}
