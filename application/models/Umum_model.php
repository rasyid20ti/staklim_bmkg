<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umum_model extends CI_Model
{
    public $table = 'umum_ajuan';
    public $id = 'umum_ajuan.id';
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
    public function getNot()
    {
        $id = $this->session->userdata('id');
        $this->db->select('um.*');
        $this->db->from('umum_ajuan um');
        $this->db->like('um.status', 'Belum');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getYangBelumProsesUmum()
    {
        $this->db->from($this->table);
        $this->db->where('status', 'Belum Di Proses');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function GetDataLaporan()
    {
        return $this->db->get('umum_ajuan')->result_array();
    }

    public function getByToken($token)
    {
        $this->db->from($this->table);
        $this->db->like('token', $token);
        $query = $this->db->get();
        return $query->result();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        // Script aslinya
        // $this->db->insert($this->table, $data);
        // return $this->db->insert_id();

        //Script yang sedang diperbaiki.
        if($this->db->insert($this->table, $data)) {
            $val = 'Berhasil';
        } else {
            $val = 'Gagal';
        }
        return $val;
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function cari($keyword)
    {
        $this->db->select('*')
            ->from('umum_ajuan')
            ->join('detail_tracking', 'umum_ajuan.token=detail_tracking.token')
            ->like('umum_ajuan.token', $keyword);
        return $this->db->get()->result();
    }
    public function insert_detail_track($data)
    {
        // $this->db->insert('detail_tracking', $data);
        // return $this->db->insert_id();

        if($this->db->insert('detail_tracking', $data)) {
            $val = 'Berhasil';
        } else {
            $val = 'Gagal';
        }
        return $val;
    }
    // public function bayar($token, $data)
    // {
    //     $this->db->update($this->table, $data, $token);
    //     return $this->db->affected_rows();
    // }
    public function bayar($bayar, $survey, $token)
    {
        $this->db->set('bayar', $bayar);
        $this->db->set('survey', $survey);
        $this->db->where('token', $token);
        $this->db->update($this->table);
        return $this->db->affected_rows;
    }
    public function updatestatus($status, $pesan, $pengurus, $link, $token)
    {
        $this->db->set('status', $status);
        $this->db->set('pesan', $pesan);
        $this->db->set('pengurus', $pengurus);
        $this->db->set('link', $link);
        $this->db->where('token', $token);
        $this->db->update($this->table);
        return $this->db->affected_rows;
    }

    public function jumlah()
    {
        $this->db->from('umum_ajuan as d');
        $this->db->like('d.status', 'Belum Diproses');
        $query = $this->db->get('umum_ajuan');
        return $query->num_rows();
    }
}
