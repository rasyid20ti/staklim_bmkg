<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MenuLayanan_model extends CI_Model
{
    public $table = 'menu';
    // public $tableSubMenu = 'submenu';
    public $id = 'menu.idMenu';
    // public $idSubMenu = 'subMenu.idSub';
    public function __construct()
    {
        parent::__construct();
    }
    public function getMenu()
    {
        $query = $this->db->query("SELECT * FROM `menu`");
        return $query->result_array();
    }
    public function getMenuInfografis()
    {
        $query = $this->db->query("SELECT DISTINCT menu.idMenu, menu.namaMenu FROM menu, infografis WHERE infografis.idMenu = menu.idMenu");
        return $query->result_array();
    }
    public function getMenuVisualisasi()
    {
        $query = $this->db->query("SELECT DISTINCT menu.idMenu, menu.namaMenu FROM menu, visualisasi WHERE visualisasi.idMenu = menu.idMenu");
        return $query->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('menu', ['idMenu' => $id])->row_array();
    }
    // public function getById($id)
    // {
    //     $query = $this->db->query("SELECT * FROM menu WHERE idMenu = $id");
    //     return $query->result_array();
    // }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    // public function getSubMenu()
    // {
    //     $this->db->from($this->tableSubMenu);
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
    // public function update($id, $data)
    // {
    //     $this->db->where('idMenu', $id);
    //     $this->db->update($this->table, $data);
    // }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    // public function updateSubMenu($where, $data)
    // {
    //     $this->db->update($this->tableSubMenu, $data, $where);
    //     return $this->db->affected_rows();
    // }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    // public function insertSubMenu($data)
    // {
    //     $this->db->insert($this->tableSubMenu, $data);
    //     return $this->db->insert_id();
    // }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    // public function deleteSubMenu($id)
    // {
    //     $this->db->where($this->idSub, $id);
    //     $this->db->delete($this->tableSubMenu);
    //     return $this->db->affected_rows();
    // }
}
