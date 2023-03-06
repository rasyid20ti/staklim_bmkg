<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search_maha_model extends CI_Model
{
    public $table = 'mahasiswa_ajuan';
    public $id = 'mahasiswa_ajuan.id';
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
    public function cari($keyword)
    {
        $this->db->select('*')
            ->from('instansi_ajuan')
            ->join('detail_tracking', 'instansi_ajuan.id=detail_tracking.id_pengajuan')
            ->where('instansi_ajuan.token', $keyword);
        return $this->db->get()->result();
    }
}
