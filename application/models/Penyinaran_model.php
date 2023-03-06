<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penyinaran_model extends CI_Model
{
	public $table = 'penyinaran';
	public $id = 'penyinaran.id';
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
	public function getBy()
	{
		$this->db->from($this->table);
		$this->db->where('email', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	public function tuser()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function getByUser2($id)
	{
		#$idu = $this->session->userdata('id');
		$this->db->from($this->table);
		#$this->db->where('id', $idu);
		$this->db->where('id',($id));
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getByDateHour($observation_date,$observation_hour)
	{

		$this->db->from($this->table);
		$this->db->where('observation_date',($observation_date));
		$this->db->where('observation_hour',($observation_hour));
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
}
