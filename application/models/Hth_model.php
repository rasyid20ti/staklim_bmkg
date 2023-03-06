<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hth_model extends CI_Model
{
	public $table = 'hth, periode';
	public $id = 'hth.id_hth';
	public $id_periode = 'periode.id_periode';
	public function __construct()
	{
		parent::__construct();
	}
	public function get()
	{
		$this->db->from('periode');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getHTH() 
	{
        $this->db->select('h.*, s.nomor_pos as nomor_pos, s.lintang as lintang, s.bujur as bujur, s.nama_pos as nama_pos');
        $this->db->from('hth h');
        $this->db->join('alat s', 'h.id_stasiun = s.nomor_pos');
        $query = $this->db->get();
        return $query->result_array();
	}
	public function getByIdHTH($id_periode)
	{
		$this->db->from('hth');
		$this->db->where('id_periode', $id_periode);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function getLatestID() {
		$this->db->select('id_periode');
		$this->db->from('periode');
		$this->db->order_by('id_periode', 'DESC');
		// $this->db->query('SELECT id_periode FROM periode WHERE id_periode ORDER BY DESC');
		$query = $this->db->get();
		$ret = $query->row();
		return $ret->id_periode;
	}
	public function getById($id)
	{
		$this->db->select('h.*, s.nomor_pos as nomor_pos, s.lintang as lintang, s.bujur as bujur, s.nama_pos as nama_pos, k.nama_kecamatan as kecamatan, kab.nama_kabupaten as kabupaten');
        $this->db->from('hth h');
		$this->db->where('h.id_periode', $id);
        $this->db->join('alat s', 'h.id_stasiun = s.nomor_pos');
		$this->db->join('kabupaten kab', 's.kabupaten = kab.id_kabupaten');
		$this->db->join('kecamatan k', 's.kecamatan = k.id');
		// $this->db->where('h.id_periode', $id);
        $query = $this->db->get();
        return $query->result_array();
	}
	public function getByLatest($hth)
	{
		$this->db->select('h.*, s.nomor_pos as nomor_pos, s.lintang as lintang, s.bujur as bujur, s.nama_pos as nama_pos, k.nama_kecamatan as kecamatan, kab.nama_kabupaten as kabupaten');
        $this->db->from('hth h');
		$this->db->where('h.id_periode', $hth);
        $this->db->join('alat s', 'h.id_stasiun = s.nomor_pos');
		$this->db->join('kabupaten kab', 's.kabupaten = kab.id_kabupaten');
		$this->db->join('kecamatan k', 's.kecamatan = k.id');
		// $this->db->where('h.id_periode', $id);
        $query = $this->db->get();
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
	public function delete($id_periode)
	{
		$this->db->where($this->id_periode, $id_periode);
		$this->db->delete('periode');
		return $this->db->affected_rows();
	}
	public function tambahDataPeriode($data){
		 $this->db->insert('periode',$data);
		 return $this->db->insert_id();
	}

	public function tambahhth($data){
		$this->db->insert('hth',$data);
   }
	
}
