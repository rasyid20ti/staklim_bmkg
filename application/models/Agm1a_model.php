<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agm1a_model extends CI_Model
{
	public $table = 'agm1a';
	public $id = 'agm1a.id';
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
		$this->db->from($this->table);
		$this->db->where('id', $id);
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
	public function download($id)
	{
		$query = $this->db->get_where('files', array('id' => $id));
		return $query->row_array();
	}
	public function file($id)
	{
		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	function getData()
	{
		$data_siswa = $this->db->get('agm1a');
		return $data_siswa->result();
	}
}
