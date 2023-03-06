<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider_model extends CI_Model
{
    public $table = 'sliderHeader';
    public $id = 'sliderHeader.idSlider';
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
    public function getAll()
    {
            // $this->db->from($this->table);
            // $query = "SELECT * FROM sliderHeader ORDER BY idSlider ASC";
            $query = $this->db->query("SELECT * FROM sliderHeader ORDER BY idSlider");
        return $query->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('sliderHeader', ['idSlider' => $id])->row_array();
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
