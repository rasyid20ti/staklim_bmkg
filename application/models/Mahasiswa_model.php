<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
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

    public function jumlah()
    {
        $this->db->from('mahasiswa_ajuan as d');
        $this->db->like('d.status', 'Belum Diproses');
        $query = $this->db->get('mahasiswa_ajuan');
        return $query->num_rows();
    }

    public function getYangBelumProsesMahasiswa()
    {
        $this->db->from($this->table);
        $this->db->where('status', 'Belum DiProses');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getNot()
    {
        $id = $this->session->userdata('id');
        $this->db->select('maha.*');
        $this->db->from('mahasiswa_ajuan maha');
        $this->db->like('maha.status', 'Belum');
        $query = $this->db->get();
        return $query->num_rows();
        // return $query->result_array();

        // $this->db->select('in*.', 'mh*.', 'um*.')
        //     ->from('instansi_ajuan in, mahasiswa_ajuan mh, umum_ajuan um')
        //     ->join('detail_tracking', 'instansi_ajuan.token=detail_tracking.token')
        //     ->join('detail_tracking', 'mahasiswa_ajuan.token=detail_tracking.token')
        //     ->join('detail_tracking', 'umum_ajuan.token=detail_tracking.token')
        //     ->where('detail_tracking.status', 'Belum Diproses');
        // return $this->db->get()->result();
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
        // $this->db->insert($this->table, $data);
        // return $this->db->insert_id();

        if($this->db->insert($this->table, $data)) {
            $val = 'Berhasil';
        } else {
            $val = 'Gagal';
        }
        return $val;
    }
    public function getByUser2($id)
    {
        $idu = $this->session->userdata('id');
        $this->db->from($this->table);
        $this->db->where('id_user', $idu);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
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
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function jumlahmaha()
    {
        $id = $this->session->userdata('id');
        $query = $this->db->get($this->table);
        $this->db->where('id_user', $id);
        return $query->num_rows();
    }
    public function getByToken($token)
    {
        $this->db->from($this->table);
        $this->db->like('token', $token);
        $query = $this->db->get();
        return $query->result();
    }
    public function cari($keyword)
    {
        $this->db->select('*')
            ->from('mahasiswa_ajuan')
            ->join('detail_tracking', 'mahasiswa_ajuan.token=detail_tracking.token')
            ->where('mahasiswa_ajuan.token', $keyword);
        return $this->db->get()->result();
    }
    public function bayar($token, $data)
    {
        $this->db->insert($this->table, $data);
        $this->db->where('token', $token);
        return $this->db->insert_id();
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
    public function GetDataLaporan()
    {
        return $this->db->get('mahasiswa_ajuan')->result_array();
    }

    // public function filesp($id)
    //    {
    // 	   $this->db->from($this->table);
    // 	   $this->db->where('id', $id);
    // 	   return $query->row_array();
    //    }

    //    public function filepp($id)
    //    {
    // 	   $this->db->from($this->table);
    // 	   $this->db->where('id', $id);
    // 	   return $query->row_array();
    //    }

    //    public function filektm($id)
    //    {
    // 	   $this->db->from($this->table);
    // 	   $this->db->where('id', $id);
    // 	   return $query->row_array();
    //    }
}
