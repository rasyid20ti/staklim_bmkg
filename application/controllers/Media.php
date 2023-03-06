<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Media extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_model');
		$this->load->model('MediaDepan_model');
		$this->load->model('Buletin_model');
		$this->load->model('Artikel_model');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_media');
		$this->load->view('layout/footer', $data);
	}
	public function berita()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['beritaX'] = $this->Berita_model->getLatest();
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_berita', $data);
		$this->load->view('layout/footer', $data);
	}
	public function berita_detail($id)
	{
		$idBerita = decrypt_url($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['beritaX'] = $this->Berita_model->getById($idBerita);
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_beritaDetail', $data);
		$this->load->view('layout/footer', $data);
	}
	public function buletin()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['buletin'] = $this->Buletin_model->getLatest();
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_buletin', $data);
		$this->load->view('layout/footer', $data);
	}
	public function search(){
		// Ambil data NIS yang dikirim via ajax post
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$keyword = $this->input->post('keyword');
		$data['buletin'] = $this->Buletin_model->get_keyword($keyword);
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_buletin', $data);
        $this->load->view('layout/footer', $data);
	}
	public function searchBerita(){
		// Ambil data NIS yang dikirim via ajax post
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$keyword = $this->input->post('keyword');
		$data['beritaX'] = $this->Berita_model->get_keyword($keyword);
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_berita', $data);
        $this->load->view('layout/footer', $data);
	}
	public function artikel()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['artikel'] = $this->Artikel_model->getAll();
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_artikel', $data);
		$this->load->view('layout/footer', $data);
	}
	public function artikel_detail($id)
	{
		$idArtikel = decrypt_url($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['artikel'] = $this->Artikel_model->getById($idArtikel);
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_artikelDetail', $data);
		$this->load->view('layout/footer', $data);
	}
	public function searchArtikel(){
		// Ambil data NIS yang dikirim via ajax post
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$keyword = $this->input->post('keyword');
		$data['artikel'] = $this->Artikel_model->get_keyword($keyword);
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_artikel', $data);
        $this->load->view('layout/footer', $data);
	}

	public function video()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// $data['video'] = $this->db->get('media')->result_array();
		$data['video'] = $this->MediaDepan_model->getAll();
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_video', $data);
		$this->load->view('layout/footer', $data);
	}
	public function searchVideo(){
		// Ambil data NIS yang dikirim via ajax post
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$data['video'] = $this->db->get('media')->result_array();
		$keyword = $this->input->post('keyword');
		$data['media'] = $this->MediaDepan_model->get_keyword($keyword);
		$this->load->view('layout/headerMedia');
		$this->load->view('media/vw_video', $data);
        $this->load->view('layout/footer', $data);
	}

	public function apiMedia()
	{
		$data['video'] = $this->db->get('media')->result_array();
		$this->load->view('api/api_media', $data);
	}
	// public function buletin_detail($idBuletin)
	// {
	// 	$id = decrypt_url($idBuletin);
	// 	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	// 	$data['buletin'] = $this->Buletin_model->getById($id);
	// 	$this->load->view('layout/headerMedia');
	// 	$this->load->view('media/vw_buletinDetail', $data);
	// 	$this->load->view('layout/footer', $data);
	// }

	public function sli()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['berita'] = $this->db->get('berita')->result_array();
		$data['sli'] = $this->Berita_model->getSli();
		$this->load->view('layout/headerMedia');
		$this->load->view('service/vw_sli', $data);
		$this->load->view('layout/footer', $data);
	}
}
