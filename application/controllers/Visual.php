<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visual extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Visualisasi_model');
		$this->load->model('Berita_model');
		$this->load->model('MediaDepan_model');
		$this->load->model('CurahHujan_model');
		$this->load->model('Suhu_model');
		$this->load->model('Kelembapan_model');
		$this->load->model('MenuLayanan_model');
        
    }
	public function index()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['visualisasi'] = $this->Visualisasi_model->getView();
		$data['menuLayanan'] = $this->MenuLayanan_model->getMenuVisualisasi();
        $this->load->view('layout/headerVisualisasi');
		$this->load->view('visual/vw_visual', $data);
        $this->load->view('layout/footer', $data);
	}
	public function detail($id)
	{
		$idDecrypt = decrypt_url($id);
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['visualisasi'] = $this->Visualisasi_model->getID($idDecrypt);
		if($idDecrypt == '29') { // ID Visualisasi - Curah Hujan
			$data['lokasi'] = $this->Visualisasi_model->getCH();
			$this->load->view('layout/headerVisualisasi');
			$this->load->view('visual/vw_hujan', $data);
			$this->load->view('layout/footer', $data);
		} elseif ($idDecrypt == '41') { // ID Visualisasi - Suhu
			$data['lokasi'] = $this->Visualisasi_model->getSuhu();
			$this->load->view('layout/headerVisualisasi');
			$this->load->view('visual/vw_suhu', $data);
			$this->load->view('layout/footer', $data);
		} elseif ($idDecrypt == '40') { // ID Visualisasi - Kelembaban
			$data['lokasi'] = $this->Visualisasi_model->getKelembaban();
			$this->load->view('layout/headerVisualisasi');
			$this->load->view('visual/vw_kelembaban', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$this->load->view('layout/headerVisualisasi');
			$this->load->view('visual/visual_detail', $data);
			$this->load->view('layout/footer', $data);
		}
	}

	public function search(){
		// Ambil data NIS yang dikirim via ajax post
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$keyword = $this->input->post('keyword');
		$topik = $this->input->post('topik');
		$data['visualisasi'] = $this->Visualisasi_model->get_keyword($keyword, $topik);
		$data['menuLayanan'] = $this->MenuLayanan_model->getMenuVisualisasi();
		$this->load->view('layout/headerVisualisasi');
		$this->load->view('visual/vw_visual', $data);
        $this->load->view('layout/footer', $data);
	}

	public function ch()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['lokasi'] = $this->Visualisasi_model->getCH();
        $this->load->view('layout/headerVisualisasi');
		$this->load->view('visual/vw_hujan', $data);
        $this->load->view('layout/footer', $data);
	}
	public function pm25()
	{
		$this->load->view('visual/vw_partikulat');
	}

	public function chart_ch()
	{
		$namapos = $_GET['namapos'];
		$data['graph'] = $this->CurahHujan_model->namapos($namapos);
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('visual/vw_getCurahHujan', $data);
	}
	public function suhu()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['lokasi'] = $this->Visualisasi_model->getSuhu();
        $this->load->view('layout/headerVisualisasi');
		$this->load->view('visual/vw_suhu', $data);
        $this->load->view('layout/footer', $data);
	}

	public function chart_suhu()
	{
		$namapos = $_GET['namapos'];
		$data['graph'] = $this->Suhu_model->namapos($namapos);
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('visual/vw_getSuhu', $data);
	}

	public function chart_kelembaban()
	{
		$namapos = $_GET['namapos'];
		$data['graph'] = $this->Kelembapan_model->namapos($namapos);
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('visual/vw_getKelembaban', $data);
	}
}
