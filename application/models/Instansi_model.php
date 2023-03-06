<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instansi_model extends CI_Model
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

    public function getNotif()
    {
        $this->db->select('in.*, mh.*, um.*');
        $this->db->from('instansi_ajuan in, mahasiswa_ajuan mh, umum_ajuan um');
        $this->db->join('detail_tracking', 'in.token=detail_tracking.token');
        $this->db->join('detail_tracking', 'mh.token=detail_tracking.token');
        $this->db->join('detail_tracking', 'um.token=detail_tracking.token');
        $this->db->like('detail_tracking.status', 'Belum Diproses');
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

    public function getYangBelumProses()
    {
        $this->db->from($this->table);
        $this->db->where('status', 'Belum Diproses');
        $query = $this->db->get();
        return $query->num_rows();
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
        // $this->db->insert($this->table, $data);
        // return $this->db->insert_id();

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
    public function search($keyword)
    {
        $cari  = '%' . $keyword . '%';
        if (!$keyword) {
            return null;
        }
        $this->db->like('nama', $cari);
        $this->db->or_like('status', $cari);
        $query = $this->db->get($this->table);
        return $query->result();
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
    public function jumlah()
    {
        $this->db->from('instansi_ajuan as d');
        $this->db->like('d.status', 'Belum Diproses');
        $query = $this->db->get('instansi_ajuan');
        return $query->num_rows();
    }

    public function getNot()
    {
        $id = $this->session->userdata('id');
        $this->db->select('ins.*');
        $this->db->from('instansi_ajuan ins');
        $this->db->like('ins.status', 'Belum');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function cari($keyword)
    {
        $this->db->select('*')
            ->from('instansi_ajuan')
            ->join('detail_tracking', 'instansi_ajuan.token=detail_tracking.token')
            ->where('instansi_ajuan.token', $keyword);
        return $this->db->get()->result();
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

    public function GetDataLaporan()
    {
        return $this->db->get('instansi_ajuan')->result_array();
    }
}
