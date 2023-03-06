<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasarian extends CI_Controller {

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
		$this->load->model('Dasarian_model');
		$this->load->model('Berita_model');
		$this->load->model('MediaDepan_model');
		$this->load->model('Hth_model');
        
    }
	public function index()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['dasarian'] = $this->Dasarian_model->getView();
		$data['media'] = $this->MediaDepan_model->getView();
        $this->load->view('layout/headerDasarian');
		$this->load->view('dasarian/vw_dasarian', $data);
        $this->load->view('layout/footer', $data);
	}
	public function detail($id)
	{
		$idDecrypt = decrypt_url($id);
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['dasarian'] = $this->Dasarian_model->getID($idDecrypt);
		$data['dasarianHTH'] = $this->Dasarian_model->getID(11);
		$data['periodeHTH'] = $this->Hth_model->getLatestID();
		$data['lokasiX'] = $this->Hth_model->getByLatest($data['periodeHTH']);
		if($idDecrypt == '11') {
			$this->load->view('layout/headerDasarian');
			$this->load->view('dasarian/dasarian_hth', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$this->load->view('layout/headerDasarian');
			$this->load->view('dasarian/dasarian_detail', $data);
			$this->load->view('layout/footer', $data);
		}
	}
	public function visual()
	{
		// $idDecrypt = decrypt_url($id);
		// $data['dasarian'] = $this->Dasarian_model->getID($idDecrypt);
		$data['berita'] = $this->Berita_model->getDuaBerita();
        $this->load->view('layout/headerDasarian');
		$this->load->view('dasarian/dasarian_visual');
        $this->load->view('layout/footer', $data);
	}
	public function search(){
		// Ambil data NIS yang dikirim via ajax post
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$keyword = $this->input->post('keyword');
		$data['dasarian'] = $this->Dasarian_model->get_keyword($keyword);
		$this->load->view('layout/headerDasarian');
		$this->load->view('dasarian/vw_dasarian', $data);
        $this->load->view('layout/footer', $data);
	}
	public function dasarian()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['dasarian'] = $this->Dasarian_model->getDasarian();
		$data['media'] = $this->MediaDepan_model->getView();
        $this->load->view('layout/headerDasarian');
		$this->load->view('dasarian/vw_dasarian', $data);
        $this->load->view('layout/footer', $data);
	}

	public function musim()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['dasarian'] = $this->Dasarian_model->getMusim();
		$data['media'] = $this->MediaDepan_model->getView();
        $this->load->view('layout/headerDasarian');
		$this->load->view('dasarian/vw_dasarian', $data);
        $this->load->view('layout/footer', $data);
	}

	public function bulanan()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['dasarian'] = $this->Dasarian_model->getBulanan();
		$data['media'] = $this->MediaDepan_model->getView();
        $this->load->view('layout/headerDasarian');
		$this->load->view('dasarian/vw_dasarian', $data);
        $this->load->view('layout/footer', $data);
	}
}
