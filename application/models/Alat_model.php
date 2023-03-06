<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alat_model extends CI_Model
{
    public $table = 'alat';
    public $id = 'alat.nomor_pos';
    public function __construct()
    {
        parent::__construct();
    }
    public function getAlat()
    {
        $query = $this->db->get('alat');
        return $query;
    }
    public function get()
    {
        $this->db->select('a.*, prov.nama_provinsi as provinsi, kab.nama_kabupaten as kabupaten, kec.nama_kecamatan as kecamatan');
        $this->db->from('alat a');
        $this->db->join('provinsi prov', 'a.provinsi = prov.id');
        $this->db->join('kabupaten kab', 'a.kabupaten = kab.id_kabupaten');
        $this->db->join('kecamatan kec', 'a.kecamatan = kec.id');
        // $this->db->like('nomor_pos', $no);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getTotalAlat()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function getById($id)
    {
        $this->db->select('a.*, prov.nama_provinsi as provinsi, kab.nama_kabupaten as kabu, kec.nama_kecamatan as keca');
        $this->db->from('alat a');
        $this->db->join('provinsi prov', 'a.provinsi = prov.id');
        $this->db->join('kabupaten kab', 'a.kabupaten = kab.id_kabupaten');
        $this->db->join('kecamatan kec', 'a.kecamatan = kec.id');
        $this->db->like('nomor_pos', $id);
        $query = $this->db->get();
        return $query->row_array();
        // return $this->db->get_where('alat', ['nomor_pos' => $id])->row_array();
    }
    public function getByNo($no)
    {
        $this->db->select('a.*, prov.nama_provinsi as provinsi, kab.nama_kabupaten as kabupaten, kec.nama_kecamatan as kecamatan');
        $this->db->from('alat a');
        $this->db->join('provinsi prov', 'a.provinsi = prov.id');
        $this->db->join('kabupaten kab', 'a.kabupaten = kab.id_kabupaten');
        $this->db->join('kecamatan kec', 'a.kecamatan = kec.id');
        $this->db->like('nomor_pos', $no);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function getByNama($nama)
    {
        $this->db->select('a.*, prov.nama_provinsi as provinsi, kab.nama_kabupaten as kabupaten, kec.nama_kecamatan as kecamatan');
        $this->db->from('alat a');
        $this->db->join('provinsi prov', 'a.provinsi = prov.id');
        $this->db->join('kabupaten kab', 'a.kabupaten = kab.id_kabupaten');
        $this->db->join('kecamatan kec', 'a.kecamatan = kec.id');
        $this->db->where('nama_pos', $nama);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getAutoComplete($nama) {
        $this->db->select('nama_pos');
        $this->db->like('nama_pos', $nama, 'both');
        $this->db->order_by('nama_pos', 'ASC');
        $query=$this->db->get('alat');
        return $query->result();
    }
    function search_alat($title){
        $this->db->like('nama_pos', $title , 'both');
        $this->db->order_by('nama_pos', 'ASC');
        $this->db->limit(10);
        return $this->db->get('alat')->result();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert('alat', $data);
        // return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
