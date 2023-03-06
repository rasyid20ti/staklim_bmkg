<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelembapan_model extends CI_Model
{
	public $table = 'kelembapan';
	public $id = 'kelembapan.id_pos';
	public function __construct()
	{
		parent::__construct();
	}
	public function get()
	{
		$this->db->select('kl.*, k.nama_kecamatan as kecamatan, kab.nama_kabupaten as kabupaten, k.nama_kecamatan, a.lintang as lintang, a.bujur as bujur');
		// $this->db->select('DISTINCT `nama_kabupaten`');
		$this->db->from('kelembapan kl');
		// $this->db->group_by('kab.nama_kabupaten');
		$this->db->join('alat a', 'kl.id_pos = a.nomor_pos');
		$this->db->join('kabupaten kab', 'a.kabupaten = kab.id_kabupaten');
		$this->db->join('kecamatan k', 'a.kecamatan = k.id');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getById($id)
	{
		$this->db->from($this->table);
        $this->db->where('id_pos', $id);
        $query = $this->db->get();
        return $query->row_array();
		// $data = $this->db->query("SELECT * from rerata_ph WHERE id_pos='$id';");
		// return $data->result();
	}
	public function namapos($namapos)
	{	
		$data = $this->db->query("SELECT * from kelembapan WHERE nama_pos = '$namapos';");
		return $data->result();
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
	public function graph($id)
	{	
		$data = $this->db->query("SELECT * from kelembapan WHERE id_pos='$id';");
		return $data->result();
	}
	public function grafik()
	{	
		$this->db->select('kl.*,a.kecamatan as nama_kecamatan, a.kabupaten as nama_kabupaten');
		$this->db->from('kelembapan kl');
		$this->db->join('alat a', 'ph.id_pos = a.nomor_pos');
		$this->db->where('a.kecamatan = ');
		$query = $this->db->get();
		return $query->result_array();
	}

}
