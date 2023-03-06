<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MenuTarif_model extends CI_Model
{
    public $table = 'tarifPNBP';
    public $id = 'tarifPNBP.idTarif';
    public function __construct()

    {
        parent::__construct();
    }
    public function get(){
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM tarifPNBP ORDER BY idTarif");
        return $query->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('tarifPNBP', ['idTarif' => $id])->row_array();
    }
    // public function update($id, $data)
    // {
    //     $this->db->update($this->table, $data);
    //     $this->db->where('idTarif', $id);    
    //     return $this->db->affected_rows();
    // }
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

