<?php
class ImportSuhu_model extends CI_Model
{
	public $table = 'suhu';
    public $id = 'suhu.id_pos';
    public function __construct()
    {
        parent::__construct();
    }
	function import($nama_pos, $nomor_pos, $jan, $feb, $mar, $apr, $mei, $jun, $jul, $ags, $sept, $okt, $nov, $des)
	{
		$query = "insert ignore into suhu values('$nomor_pos', '$nama_pos', '$jan', '$feb', '$mar', '$apr', '$mei', '$jun',
												'$jul', '$ags', '$sept', '$okt', '$nov', '$des')";
		$this->db->query($query);
	}

	function update($nomor_pos, $jan, $feb, $mar, $apr, $mei, $jun, $jul, $ags, $sept, $okt, $nov, $des)
	{
		$query = "UPDATE suhu 
				SET jan = '$jan', feb = '$feb', mar = '$mar', apr = '$apr', mei = '$mei', jun = '$jun',
				jul = '$jul', ags = '$ags', sept = '$sept', okt = '$okt', nov = '$nov', desem = '$des'
				WHERE id_pos = '$nomor_pos'";
		$this->db->query($query);
	}
	public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
	public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
