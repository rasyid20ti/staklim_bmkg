<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
    public $table = 'pegawai';
    public $id = 'pegawai.id';
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
        return $this->db->get_where('pegawai', ['id' => $id])->row_array();
    }

    public function getNumber()
    {
        $this->db->select('p.*');
        $this->db->from('pegawai p');
        echo $this->db->count_all_results();
    }

    public function getPimpinan()
    {
        // $id = $this->session->userdata('id');
        $this->db->select('p.*');
        $this->db->from('pegawai p');
        $this->db->like('p.jabatan', 'Kepala Stasiun');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getPegawai()
    {
        // $id = $this->session->userdata('id');
        $this->db->select('p.*');
        $this->db->from('pegawai p');
        $this->db->like('p.jabatan', 'PMG');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getPpnpn()
    {
        // $id = $this->session->userdata('id');        //
        $this->db->select('p.*');
        $this->db->from('pegawai p'); //select * from tabelasdasdasd
        $this->db->like('p.jabatan', 'PPNPN');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAlumni()
    {
        // $id = $this->session->userdata('id');
        $this->db->select('p.*');
        $this->db->from('pegawai p');
        $this->db->like('p.jabatan', 'Alumni');
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
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
