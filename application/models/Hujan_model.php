<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hujan_model extends CI_Model
{
	public $table = 'curahhujan';
	public $id = 'curahhujan.id';
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

	function Kabupaten()
    {
        $this->db->distinct('kabupaten');
		$this->db->order_by('nama_kabupaten', 'ASC');
        return $this->db->from('kabupaten')
          ->get()
          ->result();
    }

    function Stasiun($kabupaten)
    {
		$this->db->select('nomor_pos, nama_pos, kabupaten');
        $this->db->like('kabupaten', $kabupaten);
        $this->db->order_by('nomor_pos', 'ASC');
        return $this->db->from('alat')
            ->get()
            ->result();
    }

	public function getSta($kab){
		$this->db->select('ch.*, a.nomor_pos as nomor_pos, a.nama_pos as nama_pos, a.kabupaten as kabupaten ');
        $this->db->from('curahHujan ch');
		$this->db->join('alat a, ch.alat = a.nomor_pos');
        $this->db->like('kabupaten', $kab);
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
}
