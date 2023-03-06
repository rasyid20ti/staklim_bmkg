<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Analisis_model extends CI_Model
{
    public $table = 'analisis';
    public $id = 'analisis.id';
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

    public function getAnalisisCurahHujan()
    {
        // $id = $this->session->userdata('id');
        $this->db->select('a.analisisch, a.keterangan_ch');
        $this->db->from('analisis a');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAnalisisSifatHujan()
    {
        // $id = $this->session->userdata('id');
        $this->db->select('a.analisissh, a.keterangan_sh');
        $this->db->from('analisis a');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAnalisisCurahHujanDeterministik()
    {
        // $id = $this->session->userdata('id');
        $this->db->select('a.prakiraan_chd, a.keterangan_chd');
        $this->db->from('analisis a');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAnalisisSifatHujanDeterministik()
    {
        // $id = $this->session->userdata('id');
        $this->db->select('a.prakiraan_shd, a.keterangan_shd');
        $this->db->from('analisis a');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAnalisisCurahHujanProbabilistik()
    {
        // $id = $this->session->userdata('id');
        $this->db->select('a.prakiraan_chp, a.keterangan_chp');
        $this->db->from('analisis a');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDaerahPotensiBanjir()
    {
        // $id = $this->session->userdata('id');
        $this->db->select('a.prakiraan_dpb, a.keterangan_dpb');
        $this->db->from('analisis a');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('analisis', ['id' => $id])->row_array();
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
}
