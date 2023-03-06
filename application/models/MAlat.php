<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MAlat extends CI_Model
{

    public function getAlat()
    {
        $query = $this->db->get('alat');
        return $query;
    }
    public function getByNo($no)
    {
        $this->db->select('a.nama_pos, a.jenis_alat, a.kode_pos, a.nomor_pos, 
        a.lintang, a.bujur, a.elevasi, a.desa, a.provinsi, a.kondisi_alat, a.kepemilikan_alat,
        a.nama_penanggungjawab, a.jabatan, a.pengiriman_data, a.ketersediaan_data, a.keterangan_alat,
        a.inspeksi, a.foto, kab.nama_kabupaten as kabupaten, kec.nama_kecamatan as kecamatan');
        $this->db->from('alat a');
        $this->db->join('kabupaten kab', 'a.kabupaten = kab.id_kabupaten');
        $this->db->join('kecamatan kec', 'a.kecamatan = kec.id');
        $this->db->like('nomor_pos', $no);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getByNama($nama)
    {
        $this->db->select('a.nama_pos, a.jenis_alat, a.kode_pos, a.nomor_pos, 
        a.lintang, a.bujur, a.elevasi, a.desa, a.provinsi, a.kondisi_alat, a.kepemilikan_alat,
        a.nama_penanggungjawab, a.jabatan, a.pengiriman_data, a.ketersediaan_data, a.keterangan_alat,
        a.inspeksi, a.foto, kab.nama_kabupaten as kabupaten, kec.nama_kecamatan as kecamatan');
        $this->db->from('alat a');
        $this->db->join('kabupaten kab', 'a.kabupaten = kab.id_kabupaten');
        $this->db->join('kecamatan kec', 'a.kecamatan = kec.id');
        $this->db->where('nama_pos', $nama);
        $query = $this->db->get();
        return $query->row_array();
    }
}
