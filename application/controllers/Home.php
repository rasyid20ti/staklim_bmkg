<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

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
		$this->load->model('Mahasiswa_model');
		$this->load->model('Search_maha_model');
		$this->load->model('Search_instan_model');
		$this->load->model('Umum_model');
		$this->load->model('Instansi_model');
		$this->load->model('Survei_model');
		$this->load->model('Checkin_model');
		$this->load->model('Hth_model');
		$this->load->model('Analisis_model');
		$this->load->model('Slider_model');
		$this->load->model('Berita_model');
		$this->load->model('MenuTarif_model');
		$this->load->model('Dasarian_model');
		$this->load->model('MediaDepan_model');
	}
	public function index()
	{
		$data['hth'] = $this->Analisis_model->get();
		$data['slider'] = $this->Slider_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['beritaPressRelease'] = $this->Berita_model->getPressRelease();
		$data['menuTarif'] = $this->MenuTarif_model->get();
		$data['dasarian'] = $this->Dasarian_model->get();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['periodeHTH'] = $this->Hth_model->getLatestID();
		$data['lokasiX'] = $this->Hth_model->getByLatest($data['periodeHTH']);
		$data['headline'] = $this->db->get('headline')->result_array();

		$this->load->view('layout/header');
		$this->load->view('home/vw_home', $data);
		$this->load->view('layout/footer');
	}

	public function instansi()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$this->load->view('layout/header');
		$this->load->view('home/form_instansi');
		$this->load->view('layout/footer', $data);
	}

	public function mahasiswa()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		// $data['survei'] = $this->Survei_model->get();
		$this->load->view('layout/header');
		$this->load->view('home/form_mahasiswa');
		$this->load->view('layout/footer', $data);
	}

	public function umum()
	{
		$this->load->view('layout/header');
		$this->load->view('home/form_umum');
		$this->load->view('layout/footer');
	}

	public function cekStatus()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['mahasiswa_ajuan'] = $this->Search_maha_model->get();
		$data['instansi_ajuan'] = $this->Instansi_model->get();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->form_validation->set_rules('token', 'Keyword', 'required', ['required' => 'Token  wajib disi']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('home/caristatus', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$data['token'] = $this->input->post('token');
			$instansi = $this->Instansi_model->getByToken($data['token']);
			$umum = $this->Umum_model->getByToken($data['token']);
			$mahasiswa = $this->Mahasiswa_model->getByToken($data['token']);
			if (empty($instansi) && empty($umum)) {
				$data['ajuan'] = $mahasiswa;
			} else if (empty($mahasiswa) && empty($instansi)) {
				$data['ajuan'] = $umum;
			} else {
				$data['ajuan'] = $instansi;
			}
			// print_r($data['ajuan']);
			// die;
			$hasil_ins = $this->Instansi_model->cari($data['token']);
			$hasil_mh = $this->Mahasiswa_model->cari($data['token']);
			$hasil_um = $this->Umum_model->cari($data['token']);
			if (empty($hasil_ins) && empty($hasil_um)) {
				$data['search_result'] = $hasil_mh;
			} else if (empty($hasil_ins) && empty($hasil_mh)) {
				$data['search_result'] = $hasil_um;
			} else {
				$data['search_result'] = $hasil_ins;
			}
			$this->load->view('layout/header', $data);
			$this->load->view('home/hasilstatus', $data);
			$this->load->view('layout/footer');
		}
	}
	public function fetchData()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['keyword'] = $this->input->post('keyword');
		$instansi = $this->Instansi_model->getByToken($data['keyword']);
		$umum = $this->Umum_model->getByToken($data['keyword']);
		$mahasiswa = $this->Mahasiswa_model->getByToken($data['keyword']);
		if (empty($instansi) && empty($umum)) {
			$data['ajuan'] = $mahasiswa;
		} else if (empty($mahasiswa) && empty($instansi)) {
			$data['ajuan'] = $umum;
		} else {
			$data['ajuan'] = $instansi;
		}
		// print_r($data['ajuan']);
		// die;
		$hasil_ins = $this->Instansi_model->cari($data['keyword']);
		$hasil_mh = $this->Mahasiswa_model->cari($data['keyword']);
		$hasil_um = $this->Umum_model->cari($data['keyword']);
		if (empty($hasil_ins) && empty($hasil_um)) {
			$data['search_result'] = $hasil_mh;
		} else if (empty($hasil_ins) && empty($hasil_mh)) {
			$data['search_result'] = $hasil_um;
		} else {
			$data['search_result'] = $hasil_ins;
		}
		$this->load->view('layout/header', $data);
		$this->load->view('home/hasilstatus', $data);
		$this->load->view('layout/footer', $data);
	}
	public function bayar()
	{
		$data['mahasiswa_ajuan'] = $this->Search_maha_model->get();
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['umum'] = $this->Umum_model->get();
		$this->load->view('layout/header');
		$this->load->view('home/vw_bayar');
		$this->load->view('layout/footer',$data);
	}
	
	// Bug ditutup karena terdapat XSS Injection. (Adiska - 21/09/2022)
	public function cari()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['token'] = $this->input->post('token');
		$data['umum'] = $this->Umum_model->getByToken($data['token']);
		$instansi = $this->Instansi_model->getByToken($data['token']);
		$umum = $this->Umum_model->getByToken($data['token']);
		$mahasiswa = $this->Mahasiswa_model->getByToken($data['token']);
		if (empty($instansi) && empty($umum)) {
			$data['ajuan'] = $mahasiswa;
		} else if (empty($mahasiswa) && empty($instansi)) {
			$data['ajuan'] = $umum;
		} else {
			$data['ajuan'] = $instansi;
		}
		// // print_r($data['ajuan']);
		// // die;
		// $hasil_ins = $this->Instansi_model->cari($data['keyword']);
		// $hasil_mh = $this->Mahasiswa_model->cari($data['keyword']);
		// $hasil_um = $this->Umum_model->cari($data['keyword']);
		// if (empty($hasil_ins) && empty($hasil_um)) {
		// 	$data['search_result'] = $hasil_mh;
		// } else if (empty($hasil_ins) && empty($hasil_mh)) {
		// 	$data['search_result'] = $hasil_um;
		// } else {
		// 	$data['search_result'] = $hasil_ins;
		// }
		$this->load->view('layout/header', $data);
		$this->load->view('pengajuan/vw_hasil_bayar', $data);
		$this->load->view('layout/footer', $data);
	}

	public function survey()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data = $this->Survei_model->get();
		//$data['instansi_ajuan'] = $this->Instansi_model->get();
		$this->load->view('layout/header');
		$this->load->view($data['link']);
		$this->load->view('layout/footer', $data);
	}
}
