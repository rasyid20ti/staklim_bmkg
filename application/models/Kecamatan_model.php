<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan_model extends CI_Model
{
	public $table = 'kecamatan';
	public $id = 'kecamatan.id';
	public function __construct()
	{
		parent::__construct();
	}
	public function get()
	{
		$this->db->select('kc.*,kb.nama_kabupaten as nama_kabupaten');
		$this->db->from('kecamatan kc');
		$this->db->join('kabupaten kb', 'kc.id_kabupaten = kb.id_kabupaten');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getById($id)
	{
		$this->db->select('kc.*,kb.nama_kabupaten as nama_kabupaten');
		$this->db->from('kecamatan kc');
		$this->db->join('kabupaten kb', 'kc.id_kabupaten = kb.id_kabupaten');
		$this->db->where('kc.id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function getKec($id)
	{
		$this->db->select('kc.*,kb.nama_kabupaten as nama_kabupaten');
		$this->db->from('kecamatan kc');
		$this->db->join('kabupaten kb', 'kc.id_kabupaten = kb.id_kabupaten');
		$this->db->where('kc.id_kabupaten', $id);
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
