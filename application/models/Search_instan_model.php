<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search_instan_model extends CI_Model
{
    public $table = 'instansi_ajuan';
    public $id = 'instansi_ajuan.id';
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
            ->from('mahasiswa_ajuan')
            ->join('detail_tracking', 'mahasiswa_ajuan.id=detail_tracking.id_pengajuan')
            ->where('mahasiswa_ajuan.token', $keyword);
        return $this->db->get()->result();
    }
}
