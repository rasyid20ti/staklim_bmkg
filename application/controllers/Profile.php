<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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
		$this->load->model('Pegawai_model');
		$this->load->model('Berita_model');
		$this->load->model('MediaDepan_model');
	}
	public function profile_sdm()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['pegawai'] = $this->db->get('pegawai')->result_array();
		$data['pimpinan'] = $this->Pegawai_model->getPimpinan();
		$data['pegawai'] = $this->Pegawai_model->getPegawai();
		$data['ppnpn'] = $this->Pegawai_model->getPpnpn();
		$data['alumni'] = $this->Pegawai_model->getAlumni();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerProfil');
		$this->load->view('profile/vw_profile_sdm', $data);
		$this->load->view('layout/footer', $data);
	}

	public function profile_organisasi()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerProfil');
		$this->load->view('profile/vw_profile_organisasi');
		$this->load->view('layout/footer', $data);
	}

	public function profile_kantor()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerProfil');
		$this->load->view('profile/vw_profile');
		$this->load->view('layout/footer', $data);
	}

	public function profile_visimisi()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerProfil');
		$this->load->view('profile/vw_visimisi');
		$this->load->view('layout/footer', $data);
	}

	public function profile_tambang()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerProfil');
		$this->load->view('profile/vw_tambang');
		$this->load->view('layout/footer', $data);
	}

	public function profil()
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$this->load->view('layout/headerProfil');
		$this->load->view('profile/vw_profil');
		$this->load->view('layout/footer', $data);
	}

	public function profile_detail($id)
	{
		$data['berita'] = $this->Berita_model->getDuaBerita();
		$data['media'] = $this->MediaDepan_model->getView();
		$id = decrypt_url($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pegawai'] = $this->Pegawai_model->getById($id);
		$this->load->view('layout/headerProfil');
		$this->load->view('profile/vw_detail_sdm', $data);
		$this->load->view('layout/footer', $data);
	}
}
