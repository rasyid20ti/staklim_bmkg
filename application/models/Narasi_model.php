<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Narasi_model extends CI_Model
{
	public $table = 'narasihth';
	public $id = 'narasihth.idnarasi';
	public function __construct()
	{
		parent::__construct();
	}
	// public function get()
	// {
	// 	$this->db->select('ph.*,a.kecamatan as nama_kecamatan, a.kabupaten');
	// 	$this->db->from('rerata_ph ph');
	// 	$this->db->join('alat a', 'ph.id_pos = a.nomor_pos');
	// 	$query = $this->db->get();
	// 	return $query->result_array();
	// }
	public function get()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getById($id)
	{
		$this->db->from($this->table);
		$this->db->where('idnarasi', $id);
		$query = $this->db->get();
		return $query->row_array();
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

}
